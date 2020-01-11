jQuery(function($) {
    "use strict";

    //Scripts from popup

    $('.myself-cab').on('click', function() {
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




});