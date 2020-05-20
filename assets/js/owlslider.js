$(document).ready(function(){
    var mainClSliders = [];

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
    if($(".main-clients-about-slider").length){
        var macliFullSlider,macliSlider;

        macliSlider = $(".main-clients-about-slider");
        macliFullSlider = $(".main-clients-about-full-slider");
        macliFullSlider.owlCarousel({
            items: 1,
            nav: false,
            dots: false,
            margin: 15
        });
        macliSlider.owlCarousel({
            nav: false,
            dots: false,
            loop: true,
            responsive : {
                0 : {
                    items: 1
                },
                440 : {
                    items: 2
                },
                560 : {
                    items: 3
                },
                882 : {
                    items: 4
                },
                1029 : {
                    items: 5
                }
            },
            onInitialized: function(){
                $(".main-clients-about").removeClass("loading");
            }
        });



        macliSlider.on('translated.owl.carousel', function(event) {
            console.log(event);
            var index = event.item.index - event.page.size;
            if(index < 0){
                index = (event.item.index + event.item.count) - event.page.size;
            }
            var count = index > event.item.count ? index%event.item.count : index;

            macliFullSlider.trigger('to.owl.carousel', [count, 300])
        });


        $(".main-clients-about-slider-prev").on("click", function(e){
            e.preventDefault();
            macliSlider.trigger('prev.owl.carousel', [300]);
        });


        $(".main-clients-about-slider-next").on("click", function(e){
            e.preventDefault();
            macliSlider.trigger('next.owl.carousel', [300]);
        });

    }
});