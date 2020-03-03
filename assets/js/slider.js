(function(){
    let sliderInit = function(carousel){

        let setupPrevNextBtns = function(prevBtn, nextBtn, embla){
            prevBtn.addEventListener('click', embla.scrollPrev, false);
            nextBtn.addEventListener('click', embla.scrollNext, false);
        };

        let disablePrevNextBtns = function(prevBtn, nextBtn, embla){
            return function(){
                if (embla.canScrollPrev()) prevBtn.removeAttribute('disabled');
                else prevBtn.setAttribute('disabled', 'disabled');

                if (embla.canScrollNext()) nextBtn.removeAttribute('disabled');
                else nextBtn.setAttribute('disabled', 'disabled');
            };
        };

        let wrap = carousel;
        let viewPort = wrap.querySelector('.embla__viewport');
        let prevBtn = wrap.querySelector('.embla__button--prev');
        let nextBtn = wrap.querySelector('.embla__button--next');

        let embla = EmblaCarousel(viewPort, {
            dragFree: false,
            align: "start",
            slidesToScroll: 1,
            speed: 20,
            loop: true,
        });
        let disablePrevAndNextBtns = disablePrevNextBtns(prevBtn, nextBtn, embla);

        setupPrevNextBtns(prevBtn, nextBtn, embla);

        embla.on('select', disablePrevAndNextBtns);
        embla.on('init', disablePrevAndNextBtns);
    };

    document.querySelectorAll(".embla").forEach(function(carousel){
        sliderInit(carousel);
    });
})();