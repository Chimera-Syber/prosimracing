// Main slider on main page

var sliderIndex = 1;
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
    var i;
    var sliderWrp = document.querySelector('.slider_image_wrp');
    var slides = document.getElementsByClassName('slider_item');
    var slideWidth = slides[0].scrollWidth;
    var dots = document.getElementsByClassName('slider_nav_dot');
    var slidesImg = document.getElementsByClassName('slider_image');

    if (n > slides.length) {
        sliderIndex = 1
    }
    if (n < 1) {
        sliderIndex = slides.length;
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active-dot", "");
    }

    var src = slidesImg[sliderIndex-1].getAttribute('data-src');
    slidesImg[sliderIndex-1].style.backgroundImage = "url('" + src + "')";
    var x = slideWidth * (sliderIndex-1);
    sliderWrp.style.transform = "translateX(-" + x + "px)";
    dots[sliderIndex-1].className += " active-dot";

}

var sliderLoop = setInterval(function() {
    plusSlidesForLoop(1);
}, 4000);
