<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Add second options page under 'Basic Options'
Container::make( 'theme_options', __( 'Настройки темы' ) )
    ->set_icon( 'dashicons-carrot' )
    ->add_tab( __( 'Header' ), array(
        Field::make( 'image', 'obo_logo', __( 'Логотип темы' ))
            ->set_width( 50 ),
        Field::make( 'text', 'obo_header_email', __( 'Ваш Email' ) ),
        Field::make( 'text', 'obo_header_phone', __( 'Ваш номер телефона' ) ),
    ) )
    ->add_tab( __( 'Footer' ), array(
        Field::make( 'text', 'obo_footer_email', __( 'Ваш Email' ) ),
        Field::make( 'text', 'obo_footer_phone', __( 'Ваш номер телефона' ) ),
    ) );

Container::make( 'theme_options', __( 'Сoциальные сети' ) )
    ->add_fields( array(
        Field::make( 'text', 'obo_facebook', __( 'Facebook аккаунт' ) ),
        Field::make( 'text', 'obo_odnoklassniki', __( 'Odnoklassniki аккаунт' ) ),
        Field::make( 'text', 'obo_insta', __( 'Instagram аккаунт' ) ),
    ) );