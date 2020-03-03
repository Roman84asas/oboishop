<?php
if ( !defined('ABSPATH') ) {
    exit;
}
/**
 * Enqueue scripts and styles.
 */
function oboishop_scripts() {
    wp_enqueue_style( 'general', get_template_directory_uri() . '/assets/css/general.css', array());
    wp_enqueue_style( 'font-icon', get_template_directory_uri() . '/assets/css/all.min.css', array());
    wp_enqueue_style( 'oboishop-style', get_stylesheet_uri() );


    wp_enqueue_script( 'oboishop-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/libs/jQuery.js', array(), '20151215', true );

    wp_enqueue_script( 'oboishop-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'micromodal-min', get_template_directory_uri() . '/assets/js/libs/micromodal.min.js', array(), '20151215', true );
    wp_enqueue_script( 'embla', get_template_directory_uri() . '/assets/js/libs/embla.js', array(), '20151215', true );
    wp_enqueue_script( 'slider', get_template_directory_uri() . '/assets/js/slider.js', array(), '20151215', true );
    wp_enqueue_script( 'script-main', get_template_directory_uri() . '/assets/js/script.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'oboishop_scripts' );