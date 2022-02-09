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
}, 5000);

// Upcoming evets on main page

var widgetIndex = 1;
showWidget(widgetIndex);

function plusWidget(n) {
    showWidget(widgetIndex += n);
}

function showWidget(n) {
    var i;
    var widgets = document.getElementsByClassName('widget_item');
    var widgetWidth = widgets[0].scrollWidth;
    var widgetList = document.querySelector('.widget_list');


    if (n > widgets.length) {
        widgetIndex = 1;
    }

    if (n < 1) {
        widgetIndex = widgets.length;
    }

    var x = widgetWidth * (widgetIndex-1);
    widgetList.style.transform = "translateX(-" + x + "px)";


}

showBackgrounds();

function showBackgrounds() {
    var postPreviewImage = document.querySelectorAll('.post_preview_image');
    var coveragePostImage = document.querySelectorAll('.coverage_post');
    var mainBannerImage = document.querySelector('.main_banner_img');


    for (i = 0; i < postPreviewImage.length; i++) {
        var src = postPreviewImage[i].getAttribute('data-img');
        postPreviewImage[i].style.backgroundImage = "url('" + src + "')";
    }

    for (i = 0; i < coveragePostImage.length; i++) {
        var src = coveragePostImage[i].getAttribute('data-img');
        coveragePostImage[i].style.backgroundImage = "url('" + src + "')";
    }

    var src = mainBannerImage.getAttribute('data-img');
    mainBannerImage.style.backgroundImage = "url('" + src + "')";

}
