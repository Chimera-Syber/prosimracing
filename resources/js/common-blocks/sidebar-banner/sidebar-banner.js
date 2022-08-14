$(document).ready(function() {

    showSidebarBannerBackground();

    function showSidebarBannerBackground() {
        let BannerImage = document.querySelector('.main-section__sidebar-banner');

        if (BannerImage != undefined) {
            let src = BannerImage.getAttribute('data-img');
            BannerImage.style.backgroundImage = "url('" + src + "')";
        }
    }

});