jQuery(function($) {
    $(window).scroll(function(){
        let www = $(this).width();
        if ($(this).scrollTop() > 207 && $(this).width() > 902) {
            $('#top_menu').css('display', 'block');
        } else if ($(this).scrollTop() > 233 && $(this).width() > 610) {
            $('#top_menu').css('display', 'block');
        } else if ($(this).scrollTop() > 248 && $(this).width() > 480) {
            $('#top_menu').css('display', 'block');
        } else if ($(this).scrollTop() > 428 && $(this).width() < 480) {
            $('#top_menu').css('display', 'block');
        } else {
            $('#top_menu').css('display', 'none');
        }
    });
});