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

	<header id="masthead" >
        <div class="header_top">
            <div class="wrapper">
                <div class="content_header">
                    <div class="row">
                        <div class="coll_header">
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
                            <div class="info_and_contact">
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
                            <div class="sections-otd">
                                <div class="search-sect">
			                        <?php  echo esc_attr(get_search_form()); ?>
                                </div>
                                <div class="stations">
                                    <a href="<?php echo esc_url( home_url( '/calculator/' ) )?>" class="sect-art">Калькулятор обоев</a>
                                </div>

                            </div>
                            <div class="lk_and_files">
                                <div class="myself-cab" title="Личный кабинет">
                                    <div class="myself">
                                        <i class="fas fa-user-tie"></i>
                                    </div>
                                </div>
                                <div class="files_for_dow">
                                    Files Download
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="overlay wrapper">
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
            <div class="basket">
		        <?php oboishop_woocommerce_cart_link() ?>
                <!--<div class="mini-cart-content ">
                    <?php /*the_widget('WC_Widget_Cart', 'title=') */?>
                </div>-->
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