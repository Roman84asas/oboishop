<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oboishop
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <div class="info-header ">
        <div class="number-phone">
            <?php
            // Get all entered urls from the database
            $phone = carbon_get_theme_option( 'obo_header_phone' );
            if ( $phone) { ?>
                <span class="phone">
                    Телефон:
                </span>
                <span class="number">
                    <?php echo esc_attr($phone); ?>
                </span>
            <?php } ?>
        </div>

        <div class="my-mail">
            <?php
            // Get all entered urls from the database
            $mail = carbon_get_theme_option( 'obo_header_email' );
            if ( $mail) { ?>
                <span class="label-email">
                    Email:
                </span>
                <a href="mailto:<?php echo esc_attr($mail); ?>">
                    <?php echo esc_attr($mail); ?>
                </a>
            <?php } ?>
        </div>
    </div>
	<header id="masthead" class="site-header">

        <div class="content-header wrapper">
            <div class="logo_sect">
                <?php
                the_custom_logo();
                // Get all entered urls from the database
                $logo = carbon_get_theme_option( 'obo_logo' );
                if ( $logo) {
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" >' . wp_get_attachment_image( $logo, 'full' ) . '</a>';
                } else {
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" >OBOI SHOP</a>';
                }
                ?>
            </div>

            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'navbar-nav',
                'container'      => 'nav',
                'container_class'=> 'overlayMenu',
                'container_id'   => 'header-nav',
            ) );
            ?>

            <div class="myself-cab" title="Личный кабинет">
                <div class="myself">
                    <i class="fas fa-user-tie"></i>
                </div>
            </div>
        </div>

	</header><!-- #masthead -->
    <div class="form-popup">
       <div class="form">
           <i class="far fa-times-circle"></i>
           <div class="form-footer">
               <div class="login-button-form active">Войти</div>
               <div class="register-button-form">Регистрация</div>
           </div>

           <?php get_template_part('woocommerce/includes/parts/wc-form-login', 'login') ?>

           <?php get_template_part('woocommerce/includes/parts/wc-form-register', 'register') ?>

       </div>
    </div>
</div>

	<div id="content" class="site-content">