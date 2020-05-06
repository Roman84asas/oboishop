$(document).ready(function(){
    if($(".mSlider").length){
        var mSlider = $(".mSlider");

        mSlider.owlCarousel({
            items: 1,
            nav: true,
            navText: ['<img src="/wp-content/themes/oboishop/assets/img/mslider-arrow-prev.png">','<img src="/wp-content/themes/oboishop/assets/img/mslider-arrow-next.png">'],
            dots: true,
            loop: true
        });
    }

    $(".main-cl-slider-prev").on("click",function(e){
        e.preventDefault();
        var slider = $(this).data("slider");
        mainClSliders[slider].goToPrevSlide();
    });

    $(".main-cl-slider-next").on("click",function(e){
        e.preventDefault();
        var slider = $(this).data("slider");
        mainClSliders[slider].goToNextSlide();
    });

    $('.mr-images').owlCarousel({
        loop:false,
        margin:10,
        nav:true,
        items: 1,
        navText: [
            '<div class="ip-prev mr-images-prev"></div>',
            '<div class="ip-next mr-images-next"></div>'
        ],
    });

    $(".tab-link").on("click",function(e){
        e.preventDefault();
        var id = $(this).attr("href");
        $(this).addClass("active").siblings(".tab-link").removeClass("active");
        $(id).addClass("active").siblings(".tab").removeClass("active");

        if(mainClSliders.length > 0){
            mainClSliders.forEach(function(item, index){
                if(item.is(":visible")){
                    mainClSliders[index].refresh();
                }
            });
        }
    });
});