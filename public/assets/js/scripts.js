document.addEventListener("DOMContentLoaded",(function(){$(".page-header__user-name").click((function(){$(".page-header__login-submenu").toggleClass("page-header__login-submenu_active")}));let e=document.querySelector(".page-header__login-menu-item"),t=document.querySelector(".page-header__login-submenu");document.addEventListener("click",(function(n){n.target===e||e.contains(n.target)||t.classList.remove("page-header__login-submenu_active")}))})),document.addEventListener("DOMContentLoaded",(function(){let e,t=document.getElementsByClassName("slider__image");for(e=0;e<t.length;e++){let t=document.querySelector("#slide-image-"+(e+1)),n=t.getAttribute("data-src");t.style.backgroundImage="url('"+n+"')"}}));let sliderIndex=1;function plusSlides(e){showSlides(sliderIndex+=e),clearInterval(sliderLoop)}function plusSlidesForLoop(e){showSlides(sliderIndex+=e)}function currentSlide(e){showSlides(sliderIndex=e),clearInterval(sliderLoop)}function showSlides(e){let t,n=document.querySelector(".slider__sliders-wrp");slides=document.getElementsByClassName("slider__item"),slideWidth=slides[0].scrollWidth,dots=document.getElementsByClassName("slider__nav-dot"),e>slides.length&&(sliderIndex=1),e<1&&(sliderIndex=slides.length);let l=slideWidth*(sliderIndex-1);for(t=0;t<dots.length;t++)dots[t].className=dots[t].className.replace(" slider__nav-dot_active-dot","");n.style.transform="translateX(-"+l+"px)",dots[sliderIndex-1].className+=" slider__nav-dot_active-dot"}showSlides(sliderIndex);let sliderLoop=setInterval((function(){plusSlidesForLoop(1)}),5e3);function resizeSlider(){let e,t=document.querySelector(".slider__container"),n=document.querySelectorAll(".slider__image"),l=t.offsetWidth;for(document.querySelector(".slider__list").style.maxWidth=l+"px",e=0;e<n.length;e++)n[e].style.width=l+"px"}window.addEventListener("resize",resizeSlider);let widgets=document.getElementsByClassName("upcoming-events__widget-item");if(0!=widgets.length){let e=1;function plusWidget(t){showWidget(e+=t)}function showWidget(t){let n=document.getElementsByClassName("upcoming-events__widget-item"),l=n[0].offsetWidth,i=document.querySelector(".upcoming-events__widget-container");t>n.length&&(e=1),t<1&&(e=n.length);let d=l*(e-1)+5*(e-1);i.style.transform="translateX(-"+d+"px)"}showWidget(e)}$(document).ready((function(){!function(){let e=document.querySelector(".full-width-banner__link");if(null!=e){let t=e.getAttribute("data-img");e.style.backgroundImage="url('"+t+"')"}}()})),$(document).ready((function(){!function(){let e=document.querySelector(".main-section__sidebar-banner");if(null!=e){let t=e.getAttribute("data-img");e.style.backgroundImage="url('"+t+"')"}}()})),$(document).ready((function(){!function(){let e=document.querySelectorAll(".coverages__post-item");if(null!=e)for(i=0;i<e.length;i++){var t=e[i].getAttribute("data-img");e[i].style.backgroundImage="url('"+t+"')"}}()}));
