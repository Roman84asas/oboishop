<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Add second options page under 'Basic Options'
Container::make( 'theme_options', __( 'Настройки темы' ) )
    ->set_icon( 'dashicons-carrot' )
    ->add_tab( __( 'Header' ), array(
        Field::make( 'image', 'obo_logo', __( 'Логотип темы' ))
            ->set_width( 100 ),
        Field::make( 'text', 'obo_header_email', __( 'Ваш Email' ) ),
        Field::make( 'text', 'obo_header_phone', __( 'Ваш номер телефона' ) ),
    ) )
    ->add_tab( __( 'Footer' ), array(
        Field::make( 'text', 'obo_footer_email', __( 'Ваш Email' ) ),
        Field::make( 'text', 'obo_footer_phone', __( 'Ваш номер телефона' ) ),
    ))
	->add_tab( __( 'Список товаров' ), array(
		Field::make('file', 'obo_price_list', 'Лист товаров (PDF)' ),
		Field::make( 'text', 'obo_price_list_text', __( 'Копировать ссылку на файл PDF' ) ),
	) );

Container::make( 'theme_options', __( 'Сoциальные сети' ) )
    ->add_fields( array(
        Field::make( 'text', 'obo_facebook', __( 'Facebook аккаунт' ) ),
        Field::make( 'text', 'obo_odnoklassniki', __( 'Odnoklassniki аккаунт' ) ),
        Field::make( 'text', 'obo_insta', __( 'Instagram аккаунт' ) ),
    ) );

Container::make( 'theme_options', __( 'Slideshow' ) )
    ->add_fields( array(
        Field::make( 'image', 'obo_image1', __( 'Первая фотография' )),
        Field::make( 'text', 'obo_url_image1', __( 'URL к первой фотографии' ) ),
        Field::make( 'image', 'obo_image2', __( 'Вторая фотография' )),
        Field::make( 'text', 'obo_url_image2', __( 'URL к второй фотографии' ) ),
        Field::make( 'image', 'obo_image3', __( 'Третья фотография' )),
        Field::make( 'text', 'obo_url_image3', __( 'URL к третей фотографии' ) ),
        Field::make( 'image', 'obo_image4', __( 'Четвертая фотография' )),
        Field::make( 'text', 'obo_url_image4', __( 'URL к четвертой фотографии' ) ),
    ) );