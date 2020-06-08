<?php
if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * Enqueue scripts and styles.
 */
function oboishop_scripts() {
    wp_enqueue_style( 'general', get_template_directory_uri() . '/assets/css/general.css', array());
    wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css', array());
    wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css', array());

	if(is_page( 340 )){
		wp_enqueue_style( 'page-about', get_template_directory_uri() . '/assets/css/about.css', array());
	}
	if(is_page( 197 )){
		wp_enqueue_style( 'page-calc', get_template_directory_uri() . '/assets/css/calc.css', array());
	}
	if(is_page( 355 )){
		wp_enqueue_style( 'page-contact', get_template_directory_uri() . '/assets/css/contact.css', array());
	}
	if(is_page( 372 )){
		wp_enqueue_style( 'page-dost', get_template_directory_uri() . '/assets/css/dost.css', array());
	}
	if(is_page( 357 )){
		wp_enqueue_style( 'page-vocation', get_template_directory_uri() . '/assets/css/vacation.css', array());
	}
    if(is_page( 7 )){
        wp_enqueue_style( 'page-cart', get_template_directory_uri() . '/assets/css/cart.css', array());
    }
	if(is_archive() || is_page( 473 )){
		wp_enqueue_style( 'page-dost', get_template_directory_uri() . '/assets/css/akcii.css', array());
		wp_enqueue_style( 'page-shop', get_template_directory_uri() . '/assets/css/shop.css', array());
	}
	if(is_single( )){
		wp_enqueue_style( 'page-skid', get_template_directory_uri() . '/assets/css/skid.css', array());
		wp_enqueue_style( 'page-product', get_template_directory_uri() . '/assets/css/product.css', array());
	}
	if(is_search( )){
		wp_enqueue_style( 'page-search', get_template_directory_uri() . '/assets/css/search.css', array());
	}
	if(is_404( )){
		wp_enqueue_style( 'page-notfound', get_template_directory_uri() . '/assets/css/notfound.css', array());
	}
    wp_enqueue_style( 'font-icon', get_template_directory_uri() . '/assets/css/all.min.css', array());
    wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/libs/owl.carousel/dist/assets/owl.carousel.min.css', array());
    wp_enqueue_style( 'owlcarousel2', get_template_directory_uri() . '/libs/owl.carousel/dist/assets/owl.theme.default.min.css', array());
    wp_enqueue_style( 'oboishop-style', get_stylesheet_uri() );


    wp_enqueue_script( 'oboishop-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/libs/jQuery/jQuery.js', array(), '20151215', true );

    if(is_single( )){
        wp_enqueue_script( 'single-cart', get_template_directory_uri() . '/assets/js/singleCart.js', array(), '20151215', true );
    }

    wp_enqueue_script( 'oboishop-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'micromodal-min', get_template_directory_uri() . '/libs/micromodal/micromodal.min.js', array(), '20151215', true );
    wp_enqueue_script( 'embla', get_template_directory_uri() . '/libs/embla/embla.js', array(), '20151215', true );
    wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/libs/owl.carousel/dist/owl.carousel.min.js', array(), '20151215', true );



    //wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js', array(), '20151215', true );
    wp_enqueue_script( 'owlslider', get_template_directory_uri() . '/assets/js/owlslider.js', array(), '20151215', true );
    wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'oboishop_scripts' );