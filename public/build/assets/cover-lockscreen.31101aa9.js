import{d as o,u as a,ad as r,o as l,b as i,e,x as c,g as n,i as d}from"./main.ef0078b2.js";const m={class:"flex min-h-screen"},u=e("div",{class:"bg-gradient-to-t from-[#ff1361bf] to-[#44107A] w-1/2 min-h-screen hidden lg:flex flex-col items-center justify-center text-white dark:text-black p-4"},[e("div",{class:"w-full mx-auto mb-5"},[e("img",{src:"/assets/images/auth-cover.svg",alt:"coming_soon",class:"lg:max-w-[370px] xl:max-w-[500px] mx-auto"})]),e("h3",{class:"text-3xl font-bold mb-4 text-center"},"Join the community of expert developers"),e("p",null,"It is easy to setup with great customer experience. Start your 7-day free trial")],-1),p={class:"w-full lg:w-1/2 relative flex justify-center items-center"},f={class:"max-w-[480px] p-5 md:p-10 w-full"},x=d('<div class="flex items-center mb-10"><div class="ltr:mr-4 rtl:ml-4"><img src="/assets/images/profile-1.jpeg" class="w-16 h-16 object-cover rounded-full" alt="images"></div><div class="flex-1"><h4 class="text-3xl">Shaun Park</h4><p>Enter your password to unlock your ID</p></div></div>',1),_=e("div",null,[e("label",{for:"password"},"Password"),e("input",{id:"password",type:"password",class:"form-input",placeholder:"Enter Password"})],-1),h=e("button",{type:"submit",class:"btn btn-primary w-full"},"UNLOCK",-1),v=[_,h],k=o({__name:"cover-lockscreen",setup(w){a({title:"Lockscreen Cover"});const t=r();return(b,s)=>(l(),i("div",m,[u,e("div",p,[e("div",f,[x,e("form",{class:"space-y-5",onSubmit:s[0]||(s[0]=c(g=>n(t).push("/"),["prevent"]))},v,32)])])]))}});export{k as default};