jQuery(function($) {
    "use strict";
        $(".single-product-quantity").on("click", ".plus,.minus", function () {
            var input = $(".input-text");
            var value = input.val();
            console.log(value);
            if ($(this).hasClass("minus") && value > 1) {
                value--;
            } else if ($(this).hasClass("plus")) {
                value++;
            }
            input.val(value);
            $(this).parent().siblings(".add-to-cart").attr("data-quantity", value);
        });


});