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