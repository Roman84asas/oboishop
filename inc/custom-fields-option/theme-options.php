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
	->add_tab( __( 'Прайс листы' ), array(
		Field::make('file', 'obo_price_list', 'Общий прайс лист (PDF)' ),
		Field::make('file', 'obo_price_list_laminat', 'Ламинат (PDF)' ),
		Field::make('file', 'obo_price_list_oboi', 'Обои (PDF)' ),
		Field::make('file', 'obo_price_list_light', 'Светильники (PDF)' ),
		Field::make('file', 'obo_price_list_all_other', 'Сопутствующие товары (PDF)' )
	) );

Container::make( 'theme_options', __( 'Сoциальные сети' ) )
    ->add_fields( array(
	    Field::make( 'image', 'obo_facebook_image', __( 'Facebook фотография' )),
        Field::make( 'text', 'obo_facebook', __( 'Facebook аккаунт' ) ),
        Field::make( 'text', 'text_obo_facebook', __( 'Facebook комментарии с аккаунта' ) ),
        Field::make( 'image', 'obo_odnoklassniki_image', __( 'Odnoklassniki фотография' ) ),
        Field::make( 'text', 'obo_odnoklassniki', __( 'Odnoklassniki аккаунт' ) ),
        Field::make( 'text', 'text_obo_odnoklassniki', __( 'Odnoklassniki комментарии с аккаунта' ) ),
        Field::make( 'image', 'obo_insta_image', __( 'Instagram фотография' ) ),
        Field::make( 'text', 'obo_insta', __( 'Instagram аккаунт' ) ),
        Field::make( 'text', 'text_obo_insta', __( 'Instagram комментарии с аккаунта' ) ),
        Field::make( 'image', 'obo_google_image', __( 'Google фотография' ) ),
        Field::make( 'text', 'obo_google', __( 'Google аккаунт' ) ),
        Field::make( 'text', 'text_obo_google', __( 'Google комментарии с аккаунта' ) ),
        Field::make( 'image', 'obo_yandex_image', __( 'Yandex фотография' ) ),
        Field::make( 'text', 'obo_yandex', __( 'Yandex аккаунт' ) ),
        Field::make( 'text', 'text_obo_yandex', __( 'Yandex комментарии с аккаунта' ) ),
        Field::make( 'image', 'obo_twitter_image', __( 'Twitter фотография' ) ),
        Field::make( 'text', 'obo_twitter', __( 'Twitter аккаунт' ) ),
        Field::make( 'text', 'text_obo_twitter', __( 'Twitter комментарии с аккаунта' ) ),
        Field::make( 'image', 'obo_vk_image', __( 'Vk фотография' ) ),
        Field::make( 'text', 'obo_vk', __( 'Vk аккаунт' ) ),
        Field::make( 'text', 'text_obo_vk', __( 'Vk комментарии с аккаунта' ) ),
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