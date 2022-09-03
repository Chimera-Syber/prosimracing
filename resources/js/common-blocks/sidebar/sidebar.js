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