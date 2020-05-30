<?php
add_action('after_setup_theme', 'crb_load');
function crb_load() {
    load_template(get_template_directory().'/inc/carbon-fields/vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
};

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    require get_template_directory() . '/inc/custom-fields-option/metabox.php';
    require get_template_directory() . '/inc/custom-fields-option/theme-options.php';
}

/**
 * Implement the Settings of theme.
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Implement the Settings of widget.
 */
require get_template_directory() . '/inc/widget-settings.php';

/**
 * Enqueue scripts and styles.
 */

require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

//Helpers
require get_template_directory() . '/inc/helpers.php';
require get_template_directory() . '/inc/photo_single.php';

//Post akcii
require get_template_directory() . '/inc/posts/posts-akcii.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions.php';
    require get_template_directory() . '/woocommerce/includes/wc_function_cart.php';
}


