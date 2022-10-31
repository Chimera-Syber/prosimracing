document.addEventListener('DOMContentLoaded', function() {

    $(".page-header__user-name").click(function() {
        $(".page-header__login-submenu").toggleClass("page-header__login-submenu_active");
    });

    let dropdown = document.querySelector('.page-header__login-menu-item'),
        submenu = document.querySelector('.page-header__login-submenu');


    if (dropdown) {    
        document.addEventListener('click', function(event) {
            if (event.target !== dropdown && !dropdown.contains(event.target)) {
                submenu.classList.remove('page-header__login-submenu_active');
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {

    let slidesImg = document.getElementsByClassName('slider__image');
    let i;

    for (i = 0; i < slidesImg.length; i++) {

        
        let sliderImage = document.querySelector('#slide-image-' + (i + 1)),
            src = sliderImage.getAttribute('data-src');
        sliderImage.style.backgroundImage = "url('" + src + "')";

    } 

});

let sliderIndex = 1;
showSlides(sliderIndex);

function plusSlides(n) {
    showSlides(sliderIndex += n);
    clearInterval(sliderLoop);
}

function plusSlidesForLoop(n) {
    showSlides(sliderIndex += n);
}

function currentSlide(n) {
    showSlides(sliderIndex = n);
    clearInterval(sliderLoop);
}

function showSlides(n) {
    let i,
        sliderWrp = document.querySelector('.slider__sliders-wrp');
        slides = document.getElementsByClassName('slider__item'),
        slideWidth = slides[0].scrollWidth;
        dots = document.getElementsByClassName('slider__nav-dot');

    if (n > slides.length) {
        sliderIndex = 1
    }
    if (n < 1) {
        sliderIndex = slides.length;
    }

    let x = slideWidth * (sliderIndex-1);

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" slider__nav-dot_active-dot", "");
    }

    sliderWrp.style.transform = "translateX(-" + x + "px)";
    dots[sliderIndex-1].className += " slider__nav-dot_active-dot";

}

let sliderLoop = setInterval(function() {
    plusSlidesForLoop(1);
}, 5000);

// Resize 

function resizeSlider() {

    let container = document.querySelector('.slider__container'),
        sliderImages = document.querySelectorAll('.slider__image'),
        i,
        width = container.offsetWidth,
        sliderList = document.querySelector('.slider__list');

    sliderList.style.maxWidth = width + 'px';

    for (i = 0; i < sliderImages.length; i++) {
        sliderImages[i].style.width = width + 'px';
    }  

}

resizeSlider();

window.addEventListener('resize', resizeSlider);

let widgets = document.getElementsByClassName('upcoming-events__widget-item');

if (widgets.length != 0) { // Check element

    let widgetIndex = 1;
    showWidget(widgetIndex);

    function plusWidget(n) {
        showWidget(widgetIndex += n);
    }

    function showWidget(n) {
        let i;
        let widgets = document.getElementsByClassName('upcoming-events__widget-item');

        let widgetWidth = widgets[0].offsetWidth;
        let widgetList = document.querySelector('.upcoming-events__widget-container');

        if (n > widgets.length) {
            widgetIndex = 1;
        }

        if (n < 1) {
            widgetIndex = widgets.length;
        }

        let x = widgetWidth * (widgetIndex-1) + 5 * (widgetIndex-1);
        widgetList.style.transform = "translateX(-" + x + "px)";

    }

}
$(document).ready(function(){ 

    showFullWidthBannerBackgrounds();

    function showFullWidthBannerBackgrounds() {
        let BannerImage = document.querySelector('.full-width-banner__link');

        if (BannerImage != undefined) {
            let src = BannerImage.getAttribute('data-img');
            BannerImage.style.backgroundImage = "url('" + src + "')";
        }
    }

});
$(document).ready(function() {

    showSidebarBannerBackground();

    function showSidebarBannerBackground() {
        let BannerImages = document.querySelectorAll('.sidebar__banner'),
            i;

        if (BannerImages != undefined) {

            for (i = 0; i < BannerImages.length; i++) {
                let src = BannerImages[i].getAttribute('data-img');
                BannerImages[i].style.backgroundImage = "url('" + src + "')";
            }  
            
        }
    }

});
$(document).ready(function(){ 

    showCoveragesBackgrounds();

    function showCoveragesBackgrounds() {
        let coveragePostImage = document.querySelectorAll('.coverages__post-item');

        if (coveragePostImage != undefined) {

            for (i = 0; i < coveragePostImage.length; i++) {
                var src = coveragePostImage[i].getAttribute('data-img');
                coveragePostImage[i].style.backgroundImage = "url('" + src + "')";
            } 

        }
    }

});
// Popups script

const body = document.querySelector('body');
const lockPadding = document.querySelectorAll(".lock_padding");

let unlock = true;
const timeout = 500;

function bodyLock() {
    const lockPaddingValue = window.innerWidth - document.querySelector('.body').offsetWidth + 'px';
    if (lockPadding.length > 0) {
        for (let index = 0; index < lockPadding.length; index++) {
            const el = lockPadding[index];
            el.style.paddingRight = lockPaddingValue;
        }
    }

    body.style.paddingRight = lockPaddingValue;
    body.classList.add('lock');

    unlock = false;
    setTimeout(function () {
        unlock = true;
    }, timeout);
}

function bodyUnLock() {
    setTimeout(function () {

        if (lockPadding.length > 0) {
            for (let index = 0; index < lockPadding.length; index++) {
                const el = lockPadding[index];
                el.style.paddingRight = '0px';
            }
        }

        body.style.paddingRight = '0px';
        body.classList.remove('lock');
    }, timeout);
}

// Mobile menu script (burger)

const burgerBtn = document.querySelector('#popup-nav-menu-link');
const mobileMenu = document.querySelector("#popup-nav-menu");
const mobileMenuCloseBtn = document.querySelector('#popup-nav-menu__close');
const mobileMenuBurgerCloseBtn = document.querySelector('#popup-nav-menu__burger-close');

function mobileMenuToggle() {
    const mobileMenuActive = document.querySelector('.popup-nav-menu_open');
    
    if (mobileMenuActive) {
        mobileMenu.classList.remove('popup-nav-menu_open');
        bodyUnLock();
    } else {
        bodyLock()
        mobileMenu.classList.add('popup-nav-menu_open');
    }
}

if (burgerBtn) {
    burgerBtn.addEventListener("click", function (e) {
        mobileMenuToggle();
        e.preventDefault();
    });
}

if (mobileMenuCloseBtn) {
    mobileMenuCloseBtn.addEventListener("click", function (e) {
        mobileMenuToggle();
        e.preventDefault();
    });
}

if (mobileMenuBurgerCloseBtn) {
    mobileMenuBurgerCloseBtn.addEventListener("click", function (e) {
        mobileMenuToggle();
        e.preventDefault();
    });
}