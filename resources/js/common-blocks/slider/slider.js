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

