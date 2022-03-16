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
