document.addEventListener("DOMContentLoaded",(function(){$(".page-header__user-name").click((function(){$(".page-header__login-submenu").toggleClass("page-header__login-submenu_active")}));let e=document.querySelector(".page-header__login-menu-item"),t=document.querySelector(".page-header__login-submenu");document.addEventListener("click",(function(n){n.target===e||e.contains(n.target)||t.classList.remove("page-header__login-submenu_active")}))})),document.addEventListener("DOMContentLoaded",(function(){let e,t=document.getElementsByClassName("slider__image");for(e=0;e<t.length;e++){let n=t[e].getAttribute("data-src");t[e].style.backgroundImage="url('"+n+"')"}}));
