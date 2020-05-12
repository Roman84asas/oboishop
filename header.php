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
                            <a class="logo_sect" href=" <?php echo esc_url( home_url( '/' ) ); ?>">
		                        <?php
		                        the_custom_logo();
		                        // Get all entered urls from the database
		                        $logo = carbon_get_theme_option( 'obo_logo' );
		                        if ( $logo) {
			                        echo  wp_get_attachment_image( $logo, 'full' ) ;
		                        } else {
			                        echo "OBOI SHOP";
		                        }
		                        ?>
                            </a>
                            <div class="info_and_contact">
                                <i class="far fa-address-book"></i>
                                <div class="calls_right">
                                    <div class="number_phone">
		                                <?php
		                                // Get all entered urls from the database
		                                $phone = carbon_get_theme_option( 'obo_header_phone' );
		                                if ( $phone) { ?>
                                            <span class="phone">
                                                Телефон:
                                            </span>
                                            <p class="number">
                                                <?php echo esc_attr($phone); ?>
                                            </p>
		                                <?php } ?>
                                    </div>
                                    <div class="my_mail">
		                                <?php
		                                // Get all entered urls from the database
		                                $mail = carbon_get_theme_option( 'obo_header_email' );
		                                if ( $mail) { ?>
                                            <span class="label-email">
                                            Email:
                                            </span><br>
                                            <a href="mailto:<?php echo esc_attr($mail); ?>">
				                                <?php echo esc_attr($mail); ?>
                                            </a>
		                                <?php } ?>
                                    </div>
                                </div>

                            </div>
                            <div class="sections_otd">
                                <div class="calcul">
                                    <i class="fas fa-calculator"></i>
                                    <a href="<?php echo esc_url( home_url( '/calculator/' ) )?>" class="sect-art">Калькулятор обоев</a>
                                </div>
                                <div class="search-sect">
                                    <form class="search_form" action="/">
                                        <input type="text" name="s" placeholder="Поиск" autocomplete="off"
		                                       <?php if(isset($_GET['s'])){?>value="<?php echo $_GET['s']; ?>"<?php } ?>>
                                        <input type="submit">
                                    </form>
                                </div>
                            </div>

                            <div class="lk_and_files">
                                <div class="myself_cab" title="Личный кабинет">
                                    <i class="icon_login"></i>
                                    <span class="myself">Личный кабинет</span>
                                </div>
                                <a href="#" class="files_for_dow">
                                    <i class="icon-present"></i>
                                    <span>Прайс листы</span>
                                </a>
                                <div class="top_present">
	                                <?php
	                                $file_pdf_for_shop = carbon_get_theme_option( 'obo_price_list' );

	                                if ($file_pdf_for_shop) {
		                                $url_pdf_file = carbon_get_theme_option( 'obo_price_list_text' ); ?>
                                        <a href="<?php echo esc_url(wp_get_attachment_url($file_pdf_for_shop)); ?>" download>Все товары</a>
	                                <?php } ?>
                                    <a href="#" download>Ламинат</a>
                                    <a href="#" download>Обои</a>
                                    <a href="#" download>Светильники</a>
                                    <a href="#" download>Сопутствующие товары</a>
                                </div>


                                <a href="#" class="top-callback-open">
                                    <i class="icon-phone-grey"></i>
                                    <span>Обратный звонок</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="header_mnu">
            <div class="wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="coll">
                            <div class="nav_header_menu">
                                <div class="overlay">
		                            <?php
		                            wp_nav_menu( array(
			                            'theme_location' => 'menu-1',
			                            'menu_id'        => 'primary-menu',
			                            'menu_class'     => 'menu',
			                            'container'      => 'nav',
			                            'container_class'=> 'overlayMenu',
			                            'container_id'   => 'header-nav',
		                            ) );
		                            ?>
                                </div>
                                <div class="navBurger" role="navigation" id="navToggle"></div>
                            </div>
                            <div class="basket">
		                        <?php oboishop_woocommerce_cart_link() ?>
                            </div>

                        </div>

                    </div>

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