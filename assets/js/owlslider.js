$(document).ready(function(){
    if($(".mSlider").length){
        var mSlider = $(".mSlider");

        mSlider.owlCarousel({
            items: 1,
            nav: true,
            navText: ['<img src="/wp-content/themes/oboishop/img/mslider-arrow-prev.png">','<img src="/wp-content/themes/oboishop/img/mslider-arrow-next.png">'],
            dots: true,
            loop: true
        });
    }
});