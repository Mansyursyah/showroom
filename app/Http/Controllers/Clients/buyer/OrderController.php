<?php

namespace App\Http\Controllers\Clients\buyer;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Address;
use App\Models\MasterAccount;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Log;
use Xendit\QRCode;
use Xendit\Retail;
use Xendit\VirtualAccounts;
use Xendit\Xendit;

class OrderController extends Controller
{
    public function preCheckEarly(Request $request)
    {
        // VirtualAccount::setters
        $request->validate([
            'order_items' => 'required',
        ]);

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $weight = 0;

        $orderItems = json_decode($request->order_items, true);

        foreach ($orderItems as $order_item) {
            $product_id = $order_item['product_id'];
            $product = \App\Models\Product::find($order_item['product_id']);
            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                if ($product == null)
                    return ResponseAPI("Maaf produk dengan id tidak ditemukan.", 404);
                else
                    return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", 404);
            }
            $product->load('parent');

            if ($product->stock < $order_item['qty']) {
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                $thePromoAmount = ($product->price * $product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += ($thePromoAmount * $order_item['qty']);

                $total += ($resultItemPriceAfterDiscount * $order_item['qty']);
                $totalWithoutDiscount += ($product->price * $order_item['qty']);
            } else {
                $itemTotal = ($product->price * $order_item['qty']);
                $total += $itemTotal;
                $totalWithoutDiscount += $itemTotal;
            }

            $weight += $product->weight * $order_item['qty'];
            $productTransformed = new ProductResource($product);
            array_push($products, $productTransformed);
        }

        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        // $aa = $this->checkShippingPrice();
        $data['products'] = $products;

        return ResponseAPI($data);
    }

    public function preCheck(Request $request)
    {
        // VirtualAccount::setters
        $request->validate([
            'order_items' => 'required',
            'address_id' => 'required',
        ]);

        $addressBuyer = Address::findOrFail($request->address_id);
        $seller = \App\Models\User::find($request->seller_id);
        // dd($seller);
        $sellerAddress = Address::where('user_id', $seller->id)->where('main', true)->firstOrFail();

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $weight = 0;

        $orderItems = json_decode($request->order_items, true);
        // dd($orderItems);
        foreach ($orderItems as $order_item) {
            $product_id = $order_item['product_id'];
            $product = \App\Models\Product::find($order_item['product_id']);
            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                if ($product == null)
                    return ResponseAPI("Maaf produk dengan id tidak ditemukan.", 404);
                else
                    return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", 404);
            }
            $product->load('parent');

            if ($product->stock < $order_item['qty']) {
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                $thePromoAmount = ($product->price * $product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += ($thePromoAmount * $order_item['qty']);

                $total += ($resultItemPriceAfterDiscount * $order_item['qty']);
                $totalWithoutDiscount += ($product->price * $order_item['qty']);
            } else {
                $itemTotal = ($product->price * $order_item['qty']);
                $total += $itemTotal;
                $totalWithoutDiscount += $itemTotal;
            }

            $weight += ($product->weight * $order_item['qty']);
            $productTransformed = new ProductResource($product);
            array_push($products, $productTransformed);
        }


        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['weight'] = $weight;
        Log::info('checkShippingPrice called with parameters:', [
            'origin_id' => $addressBuyer->ro_subdistrict_id,
            'destination_id' => $sellerAddress->ro_city_id,
            'weight' => $weight,
        ]);

        // $weight = -2;
        // $deliveryServicesInfo = checkShippingPrice($addressBuyer->ro_subdistrict_id, $sellerAddress->ro_city_id, $weight);
        $dataRequest = [
            'origin_id' => $addressBuyer->ro_subdistrict_id,
            'destination_id' => $sellerAddress->ro_city_id,
            'weight' => $weight,
        ];
        $requestForShippingPrice = new Request();
        $requestForShippingPrice->merge($dataRequest);
        // $data['delivery_services_info'] = checkShippingPrice($addressBuyer->ro_subdistrict_id, $sellerAddress->ro_city_id, $weight);
        $data['delivery_services_info'] = $this->lypsisCheckShippingPrice($addressBuyer->ro_subdistrict_id, $sellerAddress->ro_city_id, $weight);
        // $aa = $this->checkShippingPrice();
        $data['products'] = $products;

        return ResponseAPI($data);
    }

    public function precheckWithDelivery(Request $request)
    {
        $request->validate([
            'order_items' => 'required',
            'address_id' => 'required',
            'delivery_cost' => 'required|numeric',
            'delivery_code' => 'required',
            'delivery_name' => 'required',
            'delivery_service' => 'required',
            'delivery_estimation_day' => 'required',
        ]);

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $deliveryCost = (int)$request->delivery_cost;


        $orderItems = json_decode($request->order_items, true);

        foreach ($orderItems as $order_item) {
            $product_id = isset($order_item['product_id']) ? $order_item['product_id'] : $order_item['id'];
            $product = \App\Models\Product::find($product_id);
            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                if ($product == null)
                    return ResponseAPI("Maaf produk dengan id tidak ditemukan.", 404);
                else
                    return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", 404);
            }
            $product->load('parent');

            $qty = isset($order_item['qty']) ? $order_item['qty'] : 1;
            if ($product->stock < $qty) {
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                // minusing the product price with discount as percentage
                $thePromoAmount = ($product->price * $product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += $thePromoAmount * $qty;

                $total += $resultItemPriceAfterDiscount * $qty;
                $totalWithoutDiscount += $product->price * $qty;
            } else {
                $total += $product->price * $qty;
                $totalWithoutDiscount += $product->price * $qty;
            }
            $productTransformed = new ProductResource($product);
            array_push($products, $productTransformed);
        }

        // create $identifier on Order::class i had getNextId()


        // $type = 'QRIS';
        // $type = 'VirtualAccount';
        $serviceFee = 0;
        $type = 'Retail';
        if ($type == 'VirtualAccount') {
            $serviceFee = 4500;
        } elseif ($type == 'QRIS') {
            // $serviceFee = floor($total * 0.00699);
            $serviceFee = floor($total * 0.007);
        } elseif ($type == 'Retail') {
            $serviceFee = 5550;
        }

        $data['subtotal'] = $total;
        $additionFee = $deliveryCost + $serviceFee;
        $total += $additionFee;
        $totalWithoutDiscount += $additionFee;

        $data['delivery_cost'] = $deliveryCost;
        $data['payment_service_fee'] = $serviceFee;
        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['products'] = $products;
        $data['delivery_code'] = $request->input('delivery_code');
        $data['delivery_name'] = $request->input('delivery_name');
        $data['delivery_service'] = $request->input('delivery_service');
        $data['delivery_estimation_day'] = $request->input('delivery_estimation_day');

        return ResponseAPI($data);
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'order_items' => 'required',
            'address_id' => 'required',
            'delivery_cost' => 'required|numeric',
            'delivery_code' => 'required',
            'delivery_name' => 'required',
            'delivery_service' => 'required',
            'master_account_id' => 'required',
        ]);

        $user = auth()->guard('web')->user();
        DB::beginTransaction();

        $products = [];
        $total = 0;
        $totalWithoutDiscount = 0;
        $countedPromoProduct = 0;
        $countedAmountPromo = 0;
        $deliveryCost = (int)$request->delivery_cost;
        // $paymentDue = now()->addDays(1)->format('Y-m-d H:i:s');
        // $paymentDue = now()->addHours(24)->format('Y-m-d H:i:s');
        $paymentDue = now()->addHours(24);
        $countOrderToday = DB::table('orders')->whereDate('created_at', now())->count();
        $identifier = str_pad(now()->day, 2, '0', STR_PAD_LEFT) . strtoupper(now()->format("M")) . now()->format('y') . 'ORD' . str_pad(($countOrderToday + 1), 3, '0', STR_PAD_LEFT) . env('XND_ID') . time();


        $orderItems = json_decode($request->order_items, true);

        $order = new Order();

        $order->payment_identifier = $identifier;
        $order->user_id = $user->id;
        $order->save();
        $weight = 0;

        foreach ($orderItems as $order_item) {
            $product_id = isset($order_item['product_id']) ? $order_item['product_id'] : $order_item['id'];
            $product = \App\Models\Product::find($product_id);
            $itemTotal = 0;

            if ($product == null) {
                $product = Product::withTrashed()->where('id', $product_id)->first();
                DB::rollBack();

                if ($product == null)
                    return ResponseAPI("Maaf produk dengan id tidak ditemukan.", 404);
                else
                    return ResponseAPI("Maaf kami sudah tidak menjual produk " . $product->name . " lagi.", 404);
            }
            $product->load('parent');
            $qty = isset($order_item['qty']) ? $order_item['qty'] : 1;
            if ($product->stock < $qty) {
                DB::rollBack();
                return ResponseAPI('Stock Produk ' . $product->name . " tidak cukup. stok yang tersisa sebanyak " . $product->stock, 400);
            }

            if ($product->discount > 0) {
                $thePromoAmount = ($product->price * $product->discount / 100);
                $resultItemPriceAfterDiscount = $product->price - $thePromoAmount;
                $countedPromoProduct++;
                $countedAmountPromo += ($thePromoAmount * $qty);

                $total += ($resultItemPriceAfterDiscount * $qty);
                $totalWithoutDiscount += ($product->price * $qty);
            } else {
                $itemTotal = ($product->price * $qty);
                $total += $itemTotal;
                $totalWithoutDiscount += $itemTotal;
            }
            $thisItemWeight = ($product->weight * $qty);

            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $product_id;
            $orderItem->quantity = $qty;
            $orderItem->subtotal = $product->price * $qty;
            $orderItem->item_total = $itemTotal;
            $orderItem->price = $product->price;
            $orderItem->note = isset($order_item['note']) ? $order_item['note'] : 'Tolong hati hati';
            $orderItem->weight = $thisItemWeight;
            // $orderItem->fee_seller = $product->fee_seller;
            // $orderItem->fee_buyer = $product->fee_buyer;
            $orderItem->save();

            $weight += $thisItemWeight;
            $productTransformed = new ProductResource($product);
            array_push($products, $productTransformed);
        }

        // create $identifier on Order::class i had getNextId()


        // $type = 'QRIS';
        // $type = 'VirtualAccount';
        $data['subtotal'] = $total;

        $serviceFee = 0;
        $type = 'Retail';
        if ($type == 'VirtualAccount') {
            $serviceFee = 4500;
            $additionFee = $deliveryCost + $serviceFee;

            $total += $additionFee;
            $totalWithoutDiscount += $additionFee;
        } elseif ($type == 'QRIS') {
            // $serviceFee = floor($total * 0.00699);
            $serviceFee = floor($total * 0.007);
        } elseif ($type == 'Retail') {
            $serviceFee = 5550;
        }


        $masterAccount = MasterAccount::findOrFail($request->master_account_id);

        $channelType = lypsisConvertPaymentChannelType($masterAccount->type);
        $channelCode = $channelType == 'QR_CODE' ? "DYNAMIC" : $masterAccount->provider_name;

        $dataPaymentCreated = $this->createPaymentRequest($channelType, $channelCode, $total, $identifier, $paymentDue, $user);
        Log::info("created payReq - $identifier :", $dataPaymentCreated);

        // dd($dataPaymentCreated);
        // return ResponseAPI($dataPaymentCreated);


        $order->discount_product = $countedAmountPromo;
        $order->payment_status = Order::PAYMENT_PENDING;
        $order->status = Order::PENDING;
        $order->address_id = $request->address_id;
        $order->delivery_cost = $deliveryCost;
        $order->service_fee = $serviceFee;
        $order->delivery_estimation_day = $request->delivery_estimation_day;
        $order->delivery_service_code = $request->delivery_code;
        $order->delivery_service_name = $request->delivery_name;
        $order->delivery_service_kind = $request->delivery_service;
        if ($countedAmountPromo > 0) {
            $order->total = $totalWithoutDiscount;
            $order->total_final = $total;
        } else {
            $order->total = $total;
        }

        // $order->market_fee_buyer = '';
        // $order->market_fee_seller = '';
        $order->master_account_id = $request->master_account_id;
        $order->payment_channel = $masterAccount->provider_name;
        $order->payment_due = $paymentDue;
        $order->weight = $weight;

        if ($channelType == 'VIRTUAL_ACCOUNT') {
            $order->va_number = $dataPaymentCreated['account_number'];
        } else if ($channelType == 'QR_CODE') {
            $order->qr_id = $dataPaymentCreated['id'];
            $order->qr_string = $dataPaymentCreated['qr_string'];
        } else if ($channelType == 'OVER_THE_COUNTER') {
            $order->outlet_payment_code = $dataPaymentCreated['payment_code'];
        }

        $order->save();

        // * Remember To Save The MasterAccountId

        $data['delivery_cost'] = $deliveryCost;
        $data['payment_service_fee'] = $serviceFee;
        $data['total'] = $total;
        $data['total_without_discount'] = $totalWithoutDiscount;
        $data['counted_promo_product'] = $countedPromoProduct;
        $data['counted_amount_promo'] = $countedAmountPromo;
        $data['order'] = $order;
        // $data['products'] = $products;
        DB::commit();

        return ResponseAPI($data);
    }

    private function lypsisCheckShippingPrice($originId, $destinationId, $weight, $earlierMode = false)
    {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, "https://pro.rajaongkir.com/api/cost");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode([
            'origin' => $originId,
            'originType' => 'subdistrict',
            'destination' => $destinationId,
            'destinationType' => 'city',
            'weight' => $weight,
            'courier' => env('RO_SERVICES'),
        ]));
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'key: ' . env('RO_KEY'),
            'Content-Type: application/json',
        ]);
        curl_setopt($curl, CURLOPT_TIMEOUT, 15);

        try {
            $res = curl_exec($curl);

            if ($res === false) {
                throw new Exception(curl_error($curl), curl_errno($curl));
            }

            $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

            if ($httpCode >= 400) {
                // throw new Exception("Error getting shipping cost: HTTP $res");
                // $rajaOngkirResponse = json_decode($res);

                // return ResponseAPI("asdasdasd", 404);

                // return ResponseAPI($rajaOngkirResponse, 404);

                $rajaOngkirResponse = json_decode($res);
                $errorCode = $rajaOngkirResponse->rajaongkir->status->code;
                $errorDescription = $rajaOngkirResponse->rajaongkir->status->description;
                throw new Exception("Error getting shipping cost: $errorDescription", 404);
            }

            $rajaOngkirResponse = json_decode($res);
            $shippingCost = $rajaOngkirResponse->rajaongkir;

            // $data['origin_details'] = $shippingCost->origin_details;
            // $data['destination_details'] = $shippingCost->destination_details;

            $data = [];
            if ($earlierMode == false) {
                // $data['results'] = $shippingCost->results;
                $data = $shippingCost;
            } else {
                $dataEarlier = null;

                if (isset($shippingCost->results[0]->costs[1])) {
                    $dataEarlier = $shippingCost->results[0]->costs[1];
                } else {
                    $dataEarlier = $shippingCost->results[0]->costs[0];
                }

                $data['results_earlier'] = $dataEarlier;
            }

            return $data;
        } catch (\Exception $e) {
            throw $e;
        } finally {
            curl_close($curl);
        }
    }


    public function createPaymentRequest($channelType, $channelCode, $amount, $paymentIdentifier, $paymentDue, User $user)
    {
        Xendit  ::setApiKey(env('XENDIT_KEY'));

        $result = null;
        // dd($amount);

        if ($channelType == 'VIRTUAL_ACCOUNT') {
            $result = VirtualAccounts::create([
                'external_id' => $paymentIdentifier . strval(time()),
                'bank_code' => $channelCode,
                'is_closed' => true,
                'name' => $user->name,
                'expected_amount' => $amount,
                'expiration_date' => $paymentDue,
            ]);
        } else if ($channelType == 'QR_CODE') {
            $result = QRCode::create([
                'api_version' => '2022-07-31',
                'reference_id' => $paymentIdentifier . strval(time()),
                'type' => 'DYNAMIC',
                'webhook-url' => 'https://662b-103-154-110-81.ngrok-free.app/0xff-callback-confirm-payment',
                'amount' => $amount,
                'expires_at' => $paymentDue,
                'currency' => 'IDR',
            ]);
        } else if ($channelType == 'OVER_THE_COUNTER') {
            $result = Retail::create([
                'external_id' => $paymentIdentifier . strval(time()),
                'retail_outlet_name' => $channelCode,
                'name' => $user->name,
                'expected_amount' => $amount,
                'expiration_date' => $paymentDue,
            ]);
        }


        return $result;
    }
}
