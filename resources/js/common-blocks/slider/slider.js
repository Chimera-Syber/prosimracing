document.addEventListener('DOMContentLoaded', function() {

    let slidesImg = document.getElementsByClassName('slider__image');
    let i;

    for (i = 0; i < slidesImg.length; i++) {

        let src = slidesImg[i].getAttribute('data-src');
        slidesImg[i].style.backgroundImage = "url('" + src + "')";

    }


});