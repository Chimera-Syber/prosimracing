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