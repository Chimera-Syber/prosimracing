$(document).ready(function(){ 

    showBannerBackgrounds();

    function showBannerBackgrounds() {
        let mainBannerImage = document.querySelector('.full-width-banner__link');

        if (mainBannerImage != undefined) {
            let src = mainBannerImage.getAttribute('data-img');
            mainBannerImage.style.backgroundImage = "url('" + src + "')";
        }
    }

    /*

    function showBackgrounds() {
        let postPreviewImage = document.querySelectorAll('.main-section__post-preview-image');
        //let coveragePostImage = document.querySelectorAll('.coverage_post');
        let mainBannerImage = document.querySelector('.full-width-banner__link');
        //var sidebarBannerImage = document.querySelector('.sidebar_banner');

        for (i = 0; i < postPreviewImage.length; i++) {
            var src = postPreviewImage[i].getAttribute('data-img');
            postPreviewImage[i].style.backgroundImage = "url('" + src + "')";
        }

         for (i = 0; i < coveragePostImage.length; i++) {
            var src = coveragePostImage[i].getAttribute('data-img');
            coveragePostImage[i].style.backgroundImage = "url('" + src + "')";
        } 

        if (mainBannerImage != undefined) {
            var src = mainBannerImage.getAttribute('data-img');
            mainBannerImage.style.backgroundImage = "url('" + src + "')";
        }
        
        if (sidebarBannerImage != undefined) {
            var src = sidebarBannerImage.getAttribute('data-img');
            sidebarBannerImage.style.backgroundImage = "url('" + src + "')";
        }

    } */

});