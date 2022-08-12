$(document).ready(function(){ 

    showCoveragesBackgrounds();

    function showCoveragesBackgrounds() {
        let coveragePostImage = document.querySelectorAll('.coverages__post-item');

        for (i = 0; i < coveragePostImage.length; i++) {
            var src = coveragePostImage[i].getAttribute('data-img');
            coveragePostImage[i].style.backgroundImage = "url('" + src + "')";
        } 
    }

});