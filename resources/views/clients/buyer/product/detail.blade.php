@extends('clients.buyer.master')
@section('title', 'Detail Produk')

@section('childs')
    <main class="main">
        <div class="section-box">
            <div class="breadcrumbs-div">
                <div class="container">
                    <ul class="breadcrumb">
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.home') }}">Beranda</a></li>
                        <li><a class="font-xs color-gray-1000" href="{{ route('buyer.allListProduct') }}">Semua Produk</a>
                        </li>
                        <li><a class="font-xs color-gray-500" href="{{ route('buyer.detailProduct') }}">Detail Produk</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <section class="section-box shop-template">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="gallery-image">
                            <div class="galleries">
                                <div class="detail-gallery">
                                    <label class="label">-17%</label>
                                    <div class="product-image-slider">
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                                alt="product image">
                                        </figure>
                                        <figure class="border-radius-10"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                                alt="product image">
                                        </figure>
                                    </div>
                                </div>
                                <div class="slider-nav-thumbnails">
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                    <div>
                                        <div class="item-thumb"><img
                                                src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                                alt="product image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <h3 class="color-brand-3 mb-25">Samsung Galaxy S22 Ultra, 8K Camera & Video, Brightest Display
                            Screen, S Pen Pro</h3>
                        <div class="row align-items-center">
                            <div class="col-lg-4 col-md-4 col-sm-3 mb-mobile"><span
                                    class="bytext color-gray-500 font-xs font-medium">by</span><a
                                    class="byAUthor color-gray-900 font-xs font-medium"
                                    href="{{ route('buyer.detailSeller') }}"> Ecom
                                    Tech</a>
                                <div class="rating mt-5"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                        alt="Ecom"><span class="font-xs color-gray-500 font-medium"> (65 reviews)</span>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-9 text-start text-sm-end"><a class="mr-20"
                                    href="{{ route('buyer.wishlist') }}"><span
                                        class="btn btn-wishlist mr-5 opacity-100 transform-none"></span><span
                                        class="font-md color-gray-900">Tambahkan ke Wishlist</span></a>
                            </div>
                        </div>
                        <div class="border-bottom pt-10 mb-20"></div>
                        <div class="box-product-price">
                            <h3 class="color-brand-3 price-main d-inline-block mr-10">$2856.3</h3><span
                                class="color-gray-500 price-line font-xl line-througt">$3225.6</span>
                        </div>
                        <div class="product-description mt-20 color-gray-900">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-dot">
                                        <li>8k super steady video</li>
                                        <li>Nightography plus portait mode</li>
                                        <li>50mp photo resolution plus bright display</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <ul class="list-dot">
                                        <li>Adaptive color contrast</li>
                                        <li>premium design & craftmanship</li>
                                        <li>Long lasting battery plus fast charging</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="box-product-color mt-20">
                            <p class="font-sm color-gray-900">Color:<span class="color-brand-2 nameColor">Pink Gold</span>
                            </p>
                            <ul class="list-colors">
                                <li class="disabled"><img src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                        alt="Ecom" title="Pink"></li>
                                <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}" alt="Ecom"
                                        title="Gold">
                                </li>
                                <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}" alt="Ecom"
                                        title="Pink Gold"></li>
                                <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}" alt="Ecom"
                                        title="Silver">
                                </li>
                                <li class="active"><img src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                        alt="Ecom" title="Pink Gold"></li>
                                <li class="disabled"><img src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                        alt="Ecom" title="Black"></li>
                                <li class="disabled"><img src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                        alt="Ecom" title="Red"></li>
                            </ul>
                        </div>
                        <div class="box-product-style-size mt-20">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <p class="font-sm color-gray-900">Style:<span
                                            class="color-brand-2 nameStyle">S22</span></p>
                                    <ul class="list-styles">
                                        <li class="disabled" title="S22 Ultra">S22 Ultra</li>
                                        <li class="active" title="S22">S22</li>
                                        <li title="S22 + Standing Cover">S22 + Standing Cover</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-20">
                                    <p class="font-sm color-gray-900">Size:<span
                                            class="color-brand-2 nameSize">512GB</span></p>
                                    <ul class="list-sizes">
                                        <li class="disabled" title="1GB">1GB</li>
                                        <li class="active" title="512 GB">512 GB</li>
                                        <li title="256 GB">256 GB</li>
                                        <li title="128 GB">128 GB</li>
                                        <li class="disabled" title="64GB">64GB</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="buy-product mt-30">
                            <p class="font-sm mb-20">Kuantitas</p>
                            <div class="box-quantity">
                                <div class="input-quantity">
                                    <input class="font-xl color-brand-3" type="text" value="1"><span
                                        class="minus-cart"></span><span class="plus-cart"></span>
                                </div>
                                <div class="button-buy"><a class="btn btn-cart"
                                        href="{{ route('buyer.cart') }}">Keranjang</a><a class="btn btn-buy"
                                        href="{{ route('buyer.checkout') }}">Beli Sekarang</a></div>

                            </div>
                        </div>
                        <div class="info-product mt-40">
                            <div class="row align-items-end">
                                <div class="col-lg-4 col-md-4 mb-20"><span
                                        class="font-sm font-medium color-gray-900">SKU:<span
                                            class="color-gray-500">iphone12pro128</span><br>Category:<span
                                            class="color-gray-500">Smartphones</span><br>Tags:<span
                                            class="color-gray-500">Blue, Smartphone</span></span></div>
                                <div class="col-lg-4 col-md-4 mb-20"><span class="font-sm font-medium color-gray-900">Free
                                        Delivery<br><span class="color-gray-500">Available for all
                                            locations.</span><br><span class="color-gray-500">Delivery Options &
                                            Info</span></span></div>
                                <div class="col-lg-4 col-md-4 mb-20 text-start text-md-end">
                                    <div class="d-inline-block">
                                        <div class="share-link"><span
                                                class="font-md-bold color-brand-3 mr-15">Share</span><a
                                                class="facebook hover-up" href="#"></a><a class="printest hover-up"
                                                href="#"></a><a class="twitter hover-up" href="#"></a><a
                                                class="instagram hover-up" href="#"></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom pt-30 mb-40"></div>
                <h4 class="color-brand-3 mb-20">Frequently Bought Together</h4>
                <div class="box-bought-together">
                    <div class="box-product-bought">
                        <div class="product-bought"><img src="{{ asset('ecom/imgs/page/product/sp1.png') }}"
                                alt="Ecom"></div>
                        <div class="product-bought"><img src="{{ asset('ecom/imgs/page/product/sp2.png') }}"
                                alt="Ecom"></div>
                        <div class="product-bought"><img src="{{ asset('ecom/imgs/page/product/sp3.png') }}"
                                alt="Ecom"></div>
                    </div>
                    <div class="price-bought">
                        <h3 class="color-brand-3 mr-10">$2856.3</h3><span class="font-lg color-gray-900">(3 items)</span>
                        <div class="box-btn-add-cart"><a class="btn btn-cart"
                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                    </div>
                </div>
                <label class="cb-container-2">
                    <input type="checkbox" checked="checked"><span class="font-md color-brand-3"><strong>This
                            item:</strong>iPhone 12 Pro Max 128GB Pacific Blue - $1,099.00</span><span
                        class="checkmark"></span>
                </label>
                <label class="cb-container-2">
                    <input type="checkbox" checked="checked"><span class="font-md color-brand-3">Apple AirPods Pro,
                        Active Noise Cancellation, Custom Fit - $197.00</span><span class="checkmark"></span>
                </label>
                <label class="cb-container-2">
                    <input type="checkbox" checked="checked"><span class="font-md color-brand-3">Apple iMac 24"
                        All-In-One Computer, Apple M1, 8GB RAM, 512GB SSD, macOS Big Sur, Green, MGPJ3LL/A -
                        $1,599.00</span><span class="checkmark"></span>
                </label>
            </div>
        </section>
        <section class="section-box shop-template">
            <div class="container">
                <div class="pt-30 mb-10">
                    <ul class="nav nav-tabs nav-tabs-product" role="tablist">
                        <li><a class="active" href="#tab-description" data-bs-toggle="tab" role="tab"
                                aria-controls="tab-description" aria-selected="true">Description</a></li>
                        <li><a href="#tab-specification" data-bs-toggle="tab" role="tab"
                                aria-controls="tab-specification" aria-selected="true">Specification</a></li>
                        <li><a href="#tab-additional" data-bs-toggle="tab" role="tab" aria-controls="tab-additional"
                                aria-selected="true">Additional information</a></li>
                        <li><a href="#tab-reviews" data-bs-toggle="tab" role="tab" aria-controls="tab-reviews"
                                aria-selected="true">Reviews (2)</a></li>
                        <li><a href="#tab-vendor" data-bs-toggle="tab" role="tab" aria-controls="tab-vendor"
                                aria-selected="true">Vendor</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="tab-description" role="tabpanel"
                            aria-labelledby="tab-description">
                            <div class="display-text-short">
                                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                                    Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do
                                    so, because there were thousands of bad Commas, wild Question Marks and devious
                                    Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put
                                    her initial into the belt and made herself on the way.</p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                    skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline
                                    of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                                    continued her way. On her way she met a copy. The copy warned the Little Blind Text,
                                    that where it came from it would have been rewritten a thousand times and everything
                                    that was left from its origin would be the word “and” and the Little Blind Text should
                                    turn around and return to its own, safe country. It is a paradisematic country, in which
                                    roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no
                                    control about the blind texts it is an almost unorthographic life One day however a
                                    small line of blind text by the name of Lorem Ipsum decided to leave for the far World
                                    of Grammar.</p>
                                <p><img src="{{ asset('ecom/imgs/page/product/product-banner.jpg') }}" alt="Ecom">
                                </p>
                                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                                    Even the all-powerful Pointing has no control about the blind texts it is an almost
                                    unorthographic life One day however a small line of blind text by the name of Lorem
                                    Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do
                                    so, because there were thousands of bad Commas, wild Question Marks and devious
                                    Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put
                                    her initial into the belt and made herself on the way.</p>
                                <p><img src="{{ asset('ecom/imgs/page/product/product-banner-2.jpg') }}" alt="Ecom">
                                </p>
                                <p>When she reached the first hills of the Italic Mountains, she had a last view back on the
                                    skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline
                                    of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she
                                    continued her way. On her way she met a copy. The copy warned the Little Blind Text,
                                    that where it came from it would have been rewritten a thousand times and everything
                                    that was left from its origin would be the word “and” and the Little Blind Text should
                                    turn around and return to its own, safe country.</p>
                            </div>
                            <div class="mt-20 text-center"><a
                                    class="btn btn-border font-sm-bold pl-80 pr-80 btn-expand-more">More Details</a></div>
                        </div>
                        <div class="tab-pane fade" id="tab-specification" role="tabpanel"
                            aria-labelledby="tab-specification">
                            <h5 class="mb-25">Specification</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tr>
                                        <td>Mode</td>
                                        <td>#SK10923</td>
                                    </tr>
                                    <tr>
                                        <td>Brand</td>
                                        <td>SamSung</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>6.7"</td>
                                    </tr>
                                    <tr>
                                        <td>Finish</td>
                                        <td>Pacific Blue</td>
                                    </tr>
                                    <tr>
                                        <td>Origin of Country</td>
                                        <td>United States</td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>Released Year</td>
                                        <td>2022</td>
                                    </tr>
                                    <tr>
                                        <td>Warranty</td>
                                        <td>International</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-additional" role="tabpanel" aria-labelledby="tab-additional">
                            <h5 class="mb-25">Additional information</h5>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td>Weight</td>
                                            <td>
                                                <p>0.240 kg</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Dimensions</td>
                                            <td>
                                                <p>0.74 x 7.64 x 16.08 cm</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews">
                            <div class="comments-area">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <h4 class="mb-30 title-question">Customer questions &amp; answers</h4>
                                        <div class="comment-list">
                                            <div class="single-comment justify-content-between d-flex mb-30 hover-up">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center"><img
                                                            src="{{ asset('ecom/imgs/page/product/author-2.png') }}"
                                                            alt="Ecom"><a class="font-heading text-brand"
                                                            href="#">Sienna</a>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="font-xs color-gray-700">December 4, 2022 at 3:12
                                                                    pm</span></div>
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width: 100%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10 font-sm color-gray-900">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Delectus, suscipit exercitationem accusantium obcaecati quos
                                                            voluptate nesciunt facilis itaque modi commodi dignissimos sequi
                                                            repudiandae minus ab deleniti totam officia id incidunt?<a
                                                                class="reply" href="#"> Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="single-comment justify-content-between d-flex mb-30 ml-30 hover-up">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center"><img
                                                            src="{{ asset('ecom/imgs/page/product/author-3.png') }}"
                                                            alt="Ecom"><a class="font-heading text-brand"
                                                            href="#">Brenna</a>
                                                    </div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="font-xs color-gray-700">December 4, 2022 at 3:12
                                                                    pm</span></div>
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10 font-sm color-gray-900">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Delectus, suscipit exercitationem accusantium obcaecati quos
                                                            voluptate nesciunt facilis itaque modi commodi dignissimos sequi
                                                            repudiandae minus ab deleniti totam officia id incidunt?<a
                                                                class="reply" href="#"> Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="single-comment justify-content-between d-flex hover-up">
                                                <div class="user justify-content-between d-flex">
                                                    <div class="thumb text-center"><img
                                                            src="{{ asset('ecom/imgs/page/product/author-4.png') }}"
                                                            alt="Ecom"><a class="font-heading text-brand"
                                                            href="#">Gemma</a></div>
                                                    <div class="desc">
                                                        <div class="d-flex justify-content-between mb-10">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="font-xs color-gray-700">December 4, 2022 at 3:12
                                                                    pm</span></div>
                                                            <div class="product-rate d-inline-block">
                                                                <div class="product-rating" style="width: 80%"></div>
                                                            </div>
                                                        </div>
                                                        <p class="mb-10 font-sm color-gray-900">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Delectus, suscipit exercitationem accusantium obcaecati quos
                                                            voluptate nesciunt facilis itaque modi commodi dignissimos sequi
                                                            repudiandae minus ab deleniti totam officia id incidunt?<a
                                                                class="reply" href="#"> Reply</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <h4 class="mb-30 title-question">Customer reviews</h4>
                                        <div class="d-flex mb-30">
                                            <div class="product-rate d-inline-block mr-15">
                                                <div class="product-rating" style="width: 90%"></div>
                                            </div>
                                            <h6>4.8 out of 5</h6>
                                        </div>
                                        <div class="progress"><span>5 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 50%"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                                        </div>
                                        <div class="progress"><span>4 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 25%"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                        </div>
                                        <div class="progress"><span>3 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 45%"
                                                aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                                        </div>
                                        <div class="progress"><span>2 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 65%"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                                        </div>
                                        <div class="progress mb-30"><span>1 star</span>
                                            <div class="progress-bar" role="progressbar" style="width: 85%"
                                                aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                                        </div><a class="font-xs text-muted" href="#">How are ratings calculated?</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-vendor" role="tabpanel" aria-labelledby="tab-vendor">
                            <div class="vendor-logo d-flex mb-30"><img
                                    src="{{ asset('ecom/imgs/page/product/futur.png') }}" alt="">
                                <div class="vendor-name ml-15">
                                    <h6><a href="{{ route('buyer.detailSeller') }}">Futur Tech.</a></h6>
                                    <div class="product-rate-cover text-end">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width: 90%"></div>
                                        </div><span class="font-small ml-5 text-muted"> (32 reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="contact-infor mb-50">
                                <li><img src="{{ asset('ecom/imgs/page/product/icon-location.svg') }}"
                                        alt=""><strong>Address:</strong><span> 5171 W Campbell Ave undefined Kent,
                                        Utah 53127 United States</span></li>
                                <li><img src="{{ asset('ecom/imgs/page/product/icon-contact.svg') }}"
                                        alt=""><strong>Contact
                                        Seller:</strong><span> (+91) - 540-025-553</span></li>
                            </ul>
                            <div class="d-flex mb-25">
                                <div class="mr-30">
                                    <p class="color-brand-1 font-xs">Rating</p>
                                    <h4 class="mb-0">92%</h4>
                                </div>
                                <div class="mr-30">
                                    <p class="color-brand-1 font-xs">Ship on time</p>
                                    <h4 class="mb-0">100%</h4>
                                </div>
                                <div>
                                    <p class="color-brand-1 font-xs">Chat response</p>
                                    <h4 class="mb-0">89%</h4>
                                </div>
                            </div>
                            <p class="font-sm color-gray-500 mb-15">
                                Noodles &amp; Company is an American fast-casual restaurant that offers international and
                                American noodle dishes and pasta in addition to soups and salads. Noodles &amp; Company was
                                founded in 1995 by Aaron Kennedy and is headquartered in Broomfield,
                                Colorado. The company went public in 2013 and recorded a $457 million revenue in 2017.In
                                late 2018, there were 460 Noodles &amp; Company locations across 29 states and Washington,
                                D.C.
                            </p>
                            <p class="font-sm color-gray-500">Proin congue dapibus rhoncus. Curabitur ipsum orci, malesuada
                                in porttitor a, porttitor quis diam. Nunc at arcu ut turpis facilisis volutpat. Proin
                                tristique, mauris non gravida dignissim, purus mauris malesuada tellus, in tincidunt orci
                                enim eget ligula. Quisque bibendum, ipsum id malesuada placerat, purus felis vehicula risus,
                                vel fringilla justo erat ullamcorper ligula. Fusce congue ullamcorper ligula, at commodo
                                turpis molestie vel.</p>
                        </div>
                        <div class="border-bottom pt-30 mb-50"></div>
                        <h4 class="color-brand-3">Produk terkait</h4>
                        <div class="list-products-5 mt-20">
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Dell</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Dell
                                            Optiplex 9020 Small Form Business Desktop Tower</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add
                                                To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">HP 24 All-in-One PC, Intel Core
                                            i3-1115G4,
                                            4GB RAM</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add
                                                To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Gateway</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Gateway
                                            23.8&quot; All-in-one Desktop, Fully Adjustable</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add
                                                To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">HP</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">HP 22 All-in-One PC, Intel Pentium
                                            Silver
                                            J5040, 4GB RAM</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add
                                                To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Sceptre</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Sceptre
                                            24&quot; Professional Thin 75Hz 1080p LED Monitor</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add
                                                To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom pt-20 mb-40"></div>
                        <h4 class="color-brand-3">Kamu mungkin juga suka</h4>
                        <div class="list-products-5 mt-20">
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">HP
                                            DeskJet 2755e Wireless Color All-in-One Printer</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add
                                                To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Razer
                                            Power Up Gaming Bundle V2 - Cynosa Lite</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add
                                                To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">Apple
                                            AirPods Pro with MagSafe Charging Case</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add
                                                To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">SAMSUNG
                                            Galaxy Tab A7 Lite, 8.7&quot; Tablet 32GB</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add
                                                To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                                        <a class="btn btn-wishlist btn-tooltip mb-10"
                                            href="{{ route('buyer.wishlist') }}" aria-label="Tambahkan ke Wishlist"></a>
                                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                                    </div>
                                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                                            href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}"
                                                alt="Ecom"></a></div>
                                    <div class="info-right"><a class="font-xs color-gray-500"
                                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                                            class="color-brand-3 font-sm-bold"
                                            href="{{ route('buyer.detailProduct') }}">HP 24mh
                                            FHD Monitor - Computer Monitor</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                                href="{{ route('buyer.cart') }}">Add
                                                To Cart</a></div>
                                        <ul class="list-features">
                                            <li>27-inch (diagonal) Retina 5K display</li>
                                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                                            <li>AMD Radeon Pro 5300 graphics</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom pt-20 mb-40"></div>
                        <h4 class="color-brand-3">Barang yang baru-baru ini dilihat</h4>
                        <div class="row mt-40">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card-grid-style-2 card-grid-none-border hover-up">
                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}"
                                                alt="Ecom"></a>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                            class="color-brand-3 font-xs-bold"
                                            href="{{ route('buyer.detailProduct') }}">SAMSUNG
                                            Galaxy Tab A7 Lite, 8.7&quot; Tablet 32GB</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card-grid-style-2 card-grid-none-border hover-up">
                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}"
                                                alt="Ecom"></a>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                            class="color-brand-3 font-xs-bold"
                                            href="{{ route('buyer.detailProduct') }}">Class 4K
                                            UHD (2160P) LED Roku Smart TV HDR</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card-grid-style-2 card-grid-none-border hover-up">
                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp1.png') }}"
                                                alt="Ecom"></a>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                            class="color-brand-3 font-xs-bold"
                                            href="{{ route('buyer.detailProduct') }}">HP 24mh
                                            FHD Monitor - Computer Monitor with 23.8-Inch</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card-grid-style-2 card-grid-none-border hover-up">
                                    <div class="image-box"><a href="{{ route('buyer.detailProduct') }}"><img
                                                src="{{ asset('ecom/imgs/page/homepage1/imgsp2.png') }}"
                                                alt="Ecom"></a>
                                    </div>
                                    <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a
                                            class="color-brand-3 font-xs-bold"
                                            href="{{ route('buyer.detailProduct') }}">Logitech
                                            H390 Wired Headset, Stereo Headphones</a>
                                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                                        <div class="price-info"><strong
                                                class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span
                                                class="color-gray-500 price-line">$3225.6</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-bottom pt-20 mb-40"></div>
                        {{-- <h4 class="color-brand-3">Similar products to compare</h4>
                        <div class="list-products-5 mt-20">
                            <div class="card-grid-style-3">
                                <div class="card-grid-inner">
                                    <div class="tools">
                                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                        <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                            aria-label="Tambahkan ke Wishlist"></a>
                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                    </div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                            href="{{ route('buyer.detailProduct') }}"><img
                                src="{{ asset('ecom/imgs/page/homepage1/imgsp3.png') }}" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500"
                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                            href="{{ route('buyer.detailProduct') }}">Logitech MK345 Wireless Combo Full-Sized
                            Keyboard</a>
                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong
                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                        <ul class="list-features">
                            <li>27-inch (diagonal) Retina 5K display</li>
                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-grid-style-3">
                <div class="card-grid-inner">
                    <div class="tools">
                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                        <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                            aria-label="Tambahkan ke Wishlist"></a>
                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                    </div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                            href="{{ route('buyer.detailProduct') }}"><img
                                src="{{ asset('ecom/imgs/page/homepage1/imgsp4.png') }}" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500"
                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                            href="{{ route('buyer.detailProduct') }}">Logitech Brio 4K Webcam, Ultra 4K HD Video
                            Calling</a>
                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong
                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                        <ul class="list-features">
                            <li>27-inch (diagonal) Retina 5K display</li>
                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-grid-style-3">
                <div class="card-grid-inner">
                    <div class="tools">
                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                        <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                            aria-label="Tambahkan ke Wishlist"></a>
                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                    </div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                            href="{{ route('buyer.detailProduct') }}"><img
                                src="{{ asset('ecom/imgs/page/homepage1/imgsp5.png') }}" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500"
                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                            href="{{ route('buyer.detailProduct') }}">HP 24mh
                            FHD Monitor - Computer Monitor</a>
                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong
                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                        <ul class="list-features">
                            <li>27-inch (diagonal) Retina 5K display</li>
                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-grid-style-3">
                <div class="card-grid-inner">
                    <div class="tools">
                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                        <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                            aria-label="Tambahkan ke Wishlist"></a>
                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                    </div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                            href="{{ route('buyer.detailProduct') }}"><img
                                src="{{ asset('ecom/imgs/page/homepage1/imgsp6.png') }}" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500"
                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a class="color-brand-3 font-sm-bold"
                            href="{{ route('buyer.detailProduct') }}">2022
                            Apple iMac with Retina 5K Display 8GB RAM</a>
                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong
                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                        <ul class="list-features">
                            <li>27-inch (diagonal) Retina 5K display</li>
                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-grid-style-3">
                <div class="card-grid-inner">
                    <div class="tools">
                        {{-- <a class="btn btn-trend btn-tooltip mb-10" href="#"
                                            aria-label="Trend" data-bs-placement="left"></a> --}}
                        <a class="btn btn-wishlist btn-tooltip mb-10" href="{{ route('buyer.wishlist') }}"
                            aria-label="Tambahkan ke Wishlist"></a>
                        {{--
                                            <a
                                            class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview"
                                            data-bs-toggle="modal"></a> --}}
                    </div>
                    <div class="image-box"><span class="label bg-brand-2">-17%</span><a
                            href="{{ route('buyer.detailProduct') }}"><img
                                src="{{ asset('ecom/imgs/page/homepage1/imgsp7.png') }}" alt="Ecom"></a></div>
                    <div class="info-right"><a class="font-xs color-gray-500"
                            href="{{ route('buyer.detailSeller') }}">Apple</a><br><a
                            class="color-brand-3 font-sm-bold" href="{{ route('buyer.detailProduct') }}">Seagate
                            Portable 2TB External Hard Drive</a>
                        <div class="rating"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><img src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info"><strong
                                class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span
                                class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-20 box-btn-cart"><a class="btn btn-cart"
                                href="{{ route('buyer.cart') }}">Keranjang</a></div>
                        <ul class="list-features">
                            <li>27-inch (diagonal) Retina 5K display</li>
                            <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                            <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                    </div>
                </div>
            </div>
            </div> --}}
            </div>
            </div>
            </div>
        </section>
        <div class="container mt-20">
            <div class="text-center"><a href="#"><img
                        src="{{ asset('ecom/imgs/page/product/banner-ads.png') }}" alt="Ecom"></a></div>
        </div>
        @include('clients.buyer.layouts.benefit')
        @include('clients.buyer.layouts.subscribe')
        <div class="modal fade" id="ModalFiltersForm" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content apply-job-form">
                    <div class="modal-header">
                        <h5 class="modal-title color-gray-1000 filters-icon">Filter Tingkat Lanjut
                        </h5>
                        <button class="btn-close" type="button" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-30">
                        <div class="row">
                            {{-- <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Brands</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span
                                                class="text-small">Apple</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Samsung</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Baseus</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Remax</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Handtown</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Elecom</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Razer</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Auto Focus</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Nillkin</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Logitech</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">ChromeBook</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div> --}}
                            <div class="col-w-1">
                                <h6 class="color-gray-900 mb-0">Penawaran khusus</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Di jual</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Bebas
                                                biaya kirim</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Big deals</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Shop Mall</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h6 class="color-gray-900 mb-0 mt-40">Ready to ship in</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">1 business day</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span
                                                class="text-small">1&ndash;3 business days</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">in 1 week</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Shipping now</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-w-1">
                                {{-- <h6 class="color-gray-900 mb-0">Ordering options</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Accepts gift
                                                cards</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Customizable</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Can be
                                                gift-wrapped</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Installment 0%</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul> --}}
                                <h6 class="color-gray-900 mb-0 mt-40">Rating</h6>
                                <ul class="list-checkbox">
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(5
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(4
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(3
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(2
                                                stars)</span></a></li>
                                    <li class="mb-5"><a href="#"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star-gray.svg') }}"
                                                alt="Ecom"><span
                                                class="ml-10 font-xs color-gray-500 d-inline-block align-top">(1
                                                star)</span></a></li>
                                </ul>
                            </div>
                            {{-- <div class="col-w-2">
                                <h6 class="color-gray-900 mb-0">Material</h6>
                                <ul class="list-checkbox">
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Nylon (8)</span><span
                                                class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Tempered Glass
                                                (5)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox" checked="checked"><span class="text-small">Liquid
                                                Silicone Rubber (5)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="cb-container">
                                            <input type="checkbox"><span class="text-small">Aluminium Alloy
                                                (3)</span><span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                                <h6 class="color-gray-900 mb-20 mt-40">Product tags</h6>
                                <div><a class="btn btn-border mr-5" href="#">Games</a><a
                                        class="btn btn-border mr-5" href="#">Electronics</a><a
                                        class="btn btn-border mr-5" href="#">Video</a><a
                                        class="btn btn-border mr-5" href="#">Cellphone</a><a
                                        class="btn btn-border mr-5" href="#">Indoor</a><a
                                        class="btn btn-border mr-5" href="#">VGA Card</a><a
                                        class="btn btn-border mr-5" href="#">USB</a><a
                                        class="btn btn-border mr-5" href="#">Lightning</a><a
                                        class="btn btn-border mr-5" href="#">Camera</a></div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start pl-30"><a class="btn btn-buy w-auto"
                            href="#">Terapkan Filter</a><a class="btn font-sm-bold color-gray-500"
                            href="#">Setel Ulang Filter</a></div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalQuickview" tabindex="-1" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-xl">
                <div class="modal-content apply-job-form">
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body p-30">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="gallery-image">
                                    <div class="galleries-2">
                                        <div class="detail-gallery">
                                            <div class="product-image-slider-2">
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                                        alt="product image"></figure>
                                                <figure class="border-radius-10"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                                        alt="product image"></figure>
                                            </div>
                                        </div>
                                        <div class="slider-nav-thumbnails-2">
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                            <div>
                                                <div class="item-thumb"><img
                                                        src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                                        alt="product image"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-tags">
                                    <div class="d-inline-block mr-25"><span
                                            class="font-sm font-medium color-gray-900">Category:</span><a class="link"
                                            href="#">Smartphones</a></div>
                                    <div class="d-inline-block"><span
                                            class="font-sm font-medium color-gray-900">Tags:</span><a class="link"
                                            href="#">Blue</a>,<a class="link" href="#">Smartphone</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product-info">
                                    <h5 class="mb-15">SAMSUNG Galaxy S22 Ultra, 8K Camera & Video, Brightest Display
                                        Screen, S Pen Pro</h5>
                                    <div class="info-by"><span
                                            class="bytext color-gray-500 font-xs font-medium">by</span><a
                                            class="byAUthor color-gray-900 font-xs font-medium"
                                            href="{{ route('buyer.detailSeller') }}"> Ecom Tech</a>
                                        <div class="rating d-inline-block"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><img
                                                src="{{ asset('ecom/imgs/template/icons/star.svg') }}"
                                                alt="Ecom"><span class="font-xs color-gray-500 font-medium"> (65
                                                reviews)</span></div>
                                    </div>
                                    <div class="border-bottom pt-10 mb-20"></div>
                                    <div class="box-product-price">
                                        <h3 class="color-brand-3 price-main d-inline-block mr-10">$2856.3</h3><span
                                            class="color-gray-500 price-line font-xl line-througt">$3225.6</span>
                                    </div>
                                    <div class="product-description mt-10 color-gray-900">
                                        <ul class="list-dot">
                                            <li>8k super steady video</li>
                                            <li>Nightography plus portait mode</li>
                                            <li>50mp photo resolution plus bright display</li>
                                            <li>Adaptive color contrast</li>
                                            <li>premium design & craftmanship</li>
                                            <li>Long lasting battery plus fast charging</li>
                                        </ul>
                                    </div>
                                    <div class="box-product-color mt-10">
                                        <p class="font-sm color-gray-900">Color:<span
                                                class="color-brand-2 nameColor">Pink Gold</span></p>
                                        <ul class="list-colors">
                                            <li class="disabled"><img
                                                    src="{{ asset('ecom/imgs/page/product/img-gallery-1.jpg') }}"
                                                    alt="Ecom" title="Pink"></li>
                                            <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-2.jpg') }}"
                                                    alt="Ecom" title="Gold"></li>
                                            <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-3.jpg') }}"
                                                    alt="Ecom" title="Pink Gold"></li>
                                            <li><img src="{{ asset('ecom/imgs/page/product/img-gallery-4.jpg') }}"
                                                    alt="Ecom" title="Silver"></li>
                                            <li class="active"><img
                                                    src="{{ asset('ecom/imgs/page/product/img-gallery-5.jpg') }}"
                                                    alt="Ecom" title="Pink Gold"></li>
                                            <li class="disabled"><img
                                                    src="{{ asset('ecom/imgs/page/product/img-gallery-6.jpg') }}"
                                                    alt="Ecom" title="Black"></li>
                                            <li class="disabled"><img
                                                    src="{{ asset('ecom/imgs/page/product/img-gallery-7.jpg') }}"
                                                    alt="Ecom" title="Red"></li>
                                        </ul>
                                    </div>
                                    <div class="box-product-style-size mt-10">
                                        <div class="row">
                                            <div class="col-lg-12 mb-10">
                                                <p class="font-sm color-gray-900">Style:<span
                                                        class="color-brand-2 nameStyle">S22</span></p>
                                                <ul class="list-styles">
                                                    <li class="disabled" title="S22 Ultra">S22 Ultra</li>
                                                    <li class="active" title="S22">S22</li>
                                                    <li title="S22 + Standing Cover">S22 + Standing Cover</li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-12 mb-10">
                                                <p class="font-sm color-gray-900">Size:<span
                                                        class="color-brand-2 nameSize">512GB</span></p>
                                                <ul class="list-sizes">
                                                    <li class="disabled" title="1GB">1GB</li>
                                                    <li class="active" title="512 GB">512 GB</li>
                                                    <li title="256 GB">256 GB</li>
                                                    <li title="128 GB">128 GB</li>
                                                    <li class="disabled" title="64GB">64GB</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buy-product mt-5">
                                        <p class="font-sm mb-10">Kuantitas</p>
                                        <div class="box-quantity">
                                            <div class="input-quantity">
                                                <input class="font-xl color-brand-3" type="text"
                                                    value="1"><span class="minus-cart"></span><span
                                                    class="plus-cart"></span>
                                            </div>
                                            <div class="button-buy"><a class="btn btn-cart"
                                                    href="{{ route('buyer.cart') }}">Keranjang</a><a
                                                    class="btn btn-buy" href="{{ route('buyer.checkout') }}">Beli
                                                    Sekarang</a></div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
@push('importjs')
@endpush
