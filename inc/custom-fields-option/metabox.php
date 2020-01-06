<?php
if ( !defined('ABSPATH') ) {
    exit;
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make( 'post_meta', 'Custom Data' )
    ->show_on_post_type( 'page' )
    ->show_on_template( 'templates/page-home.php' )
    ->add_fields( array(
        Field::make( 'image', 'crb_photo' ),
    ));