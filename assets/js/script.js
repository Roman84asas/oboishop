jQuery(function($) {
    "use strict";
    //Script for download
    $('.files_for_dow').on('click', function () {
        let stateVar = $('.top_present').is(":visible");
        if (!stateVar) {
            $('.top_present').show(300);
        } else {
            $('.top_present').hide(300);
        }
    });

    //Script for callback phone
    $('.top-callback-open').on('click', function () {
        let stateVar = $('.top_callback').is(":visible");
        if (!stateVar) {
            $('.top_callback').show(300);
        } else {
            $('.top_callback').hide(300);
        }
    });

    //Scripts from popup

    $('.myself_cab').on('click', function() {
        $('.form-popup').css('display', 'block');
    });
    $('.fa-times-circle').click(function() { // Обрабатываем клик по заднему фону
        PopUpHide();
    });

    $('.login-button-form').on('click', function() {
        $('.register-button-form').toggleClass('active', false);
        $('.login-button-form').toggleClass('active');

        $('.form-register').css('display', 'none');
        $('.form-login').css('display', 'block');
    });
    $('.register-button-form').on('click', function() {
        $('.login-button-form').toggleClass('active', false);
        $('.register-button-form').toggleClass('active');

        $('.form-login').css('display', 'none');
        $('.form-register').css('display', 'block');
    });

    function PopUpHide(){
        $(".form-popup").css('display', 'none');
    }

//Calculator
    $('#calc').on('click', function() {
        let a=parseFloat($('input[name=\'a\']').val().replace(",", "."));
        let b=parseFloat($('input[name=\'b\']').val().replace(",", "."));
        let c=parseFloat($('input[name=\'c\']').val().replace(",", "."));
        let d=parseFloat($('input[name=\'d\']').val().replace(",", "."));
        let e=parseFloat($('input[name=\'e\']').val().replace(",", "."));
        let f=parseFloat($('input[name=\'f\']').val().replace(",", "."));
        let g=parseFloat($('input[name=\'g\']').val().replace(",", "."));
        let h=parseFloat($('input[name=\'h\']').val().replace(",", "."));
        let i=parseFloat($('input[name=\'i\']').val().replace(",", "."));
        let j=parseFloat($('input[name=\'j\']').val().replace(",", "."));
        let k=parseFloat($('input[name=\'k\']').val().replace(",", "."));
        let r=parseFloat($('input[name=\'r\']').val().replace(",", "."));

        let P = 2 * ( a + i );
        let P2 =  P - (j * e + k * g);
        let KH = d / (b + 0.05 + 0.5 * r * 0.01);
        let KSH = P2 / c;
        let Q= Math.ceil( KSH / KH ) ;

        let K= ( 2 * ( a + i ) * ( b + 0.1 ) ) - j * ( e * f ) - k * ( g * h ) ;
        $("#Q").text(Q);
        /*$("#K").text(K);*/
    });

});