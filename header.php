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
								$file_pdf_for_laminat = carbon_get_theme_option( 'obo_price_list_laminat' );
								$file_pdf_for_oboi = carbon_get_theme_option( 'obo_price_list_oboi' );
								$file_pdf_for_light = carbon_get_theme_option( 'obo_price_list_light' );
								$file_pdf_for_all_other = carbon_get_theme_option( 'obo_price_list_all_other' );

								if ($file_pdf_for_shop) { ?>
                                    <a href="<?php echo esc_url(wp_get_attachment_url($file_pdf_for_shop)); ?>" download>Все товары</a>
								<?php }
								if ($file_pdf_for_laminat) { ?>
                                    <a href="<?php echo esc_url(wp_get_attachment_url($file_pdf_for_laminat)); ?>" download>Ламинат</a>
								<?php }
								if ($file_pdf_for_oboi) { ?>
                                    <a href="<?php echo esc_url(wp_get_attachment_url($file_pdf_for_oboi)); ?>" download>Обои</a>
								<?php }
								if ($file_pdf_for_light) { ?>
                                    <a href="<?php echo esc_url(wp_get_attachment_url($file_pdf_for_light)); ?>" download>Светильники</a>
								<?php }
								if ($file_pdf_for_all_other) { ?>
                                    <a href="<?php echo esc_url(wp_get_attachment_url($file_pdf_for_all_other)); ?>" download>Сопутствующие товары</a>
								<?php }
								?>
                            </div>


                            <a href="#" class="top-callback-open">
                                <i class="icon-phone-grey"></i>
                                <span>Обратный звонок</span>
                            </a>
                            <div class="top_callback">
                                <h3>Обратный звонок</h3>
                                <img src="/wp-content/themes/oboishop/assets/img/callback-img.png" alt="Звонок Обои плюс">
                                <p>
                                    Введите свой номер телефона <br> и мы перезвоним вам
                                </p>
                                <form>
                                    <input type="hidden" name="action" value="submitForm" />
                                    <div style="display: none;">
                                        <input type="text" name="fullName" value="" />
                                    </div>
                                    <label>
                                        <input type="text" name="phone" placeholder="Ваш телефон">
                                    </label>
                                    <label>
                                        <input type="text" name="time" placeholder="Удобное время">
                                    </label>
                                    <p>
                                        <strong>Рабочее время:</strong>
                                        Пн. - Пт, с 10:00 до 19:00
                                    </p>
                                    <button>перезвоните мне!</button>
                                    <label>
                                        <input type="checkbox" name="agree" checked>
                                        <span>Соглашение об обработке персональных данных</span>
                                    </label>
									<?php wp_nonce_field(); ?>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_mnu">
        <div class="wrapper">
            <div class="container_fluid">
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
</header>
<div class="top_menu" id="top_menu">
    <div class="wrapper">
        <div class="menu_categ" id="menu_categ">
            <div class="burger" role="navigation" id="navToggleTop"></div>
            <span>Каталог товаров</span>
            <div class="catalog-menu">
                <ul class="homepage-category" id="homepage-category">
                    <?php
                    $prod_cat_args = array(
                        'taxonomy'    => 'product_cat',
                        'orderby'     => 'id',
                        'parent'      => 0
                    );
                    $woo_categories = get_categories( $prod_cat_args );
                    foreach ( $woo_categories as $woo_cat ) {
                        $woo_cat_id = $woo_cat->term_id;
                        $woo_cat_name = $woo_cat->name;
                        $woo_cat_slug = $woo_cat->slug;
                        $category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);
                        $child_cat_tax = get_terms('product_cat', [ 'parent'=>$woo_cat_id ]);

                        //get_vd($child_cat_tax);

                        echo '<li class="main-cat-item">';
                        echo '<h4><a href="' . get_term_link( $woo_cat_id, 'product_cat' ) . '">' . $woo_cat_name . '</a></h4>';
                        echo '<ul class="prime_ul" id="prime_ul">';
                        foreach ($child_cat_tax as $child) {
                            //get_vd($child);
                            $term = get_term_by( 'id', $child->term_id, "product_cat" );
                            $child_cat_tax_pod = get_terms('product_cat', [ 'parent'=>$child->term_id ]);
                            echo '<li class="pod_main-cat-item">';
                            echo '<h4><a href="' . get_term_link( $term->term_id, $term->taxonomy ) . '">' . $term->name . '</a></h4>';
                            echo '<ul class="first_ul" id="first_ul">';
                            foreach ($child_cat_tax_pod as $children) {
                                //get_vd($child);
                                $term = get_term_by( 'id', $children->term_id, "product_cat" );
                                $child_cat_tax_pod = get_terms('product_cat', [ 'parent'=>$child->term_id ]);
                                echo '<li class="pod_main-cat-item"><a href="' . get_term_link( $term->term_id, $term->taxonomy ) . '">' . $term->name . '</a></li>';
                            }
                            echo '</ul>';
                            echo "</li>";
                        }
                        echo '</ul>';
                        echo "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="search-secn">
            <form class="search_form" action="/">
                <input type="text" name="s" placeholder="Поиск" autocomplete="off"
                       <?php if(isset($_GET['s'])){?>value="<?php echo $_GET['s']; ?>"<?php } ?>>
                <input type="submit">
            </form>
        </div>
        <div class="calcul">
            <i class="fas fa-calculator"></i>
            <a href="<?php echo esc_url( home_url( '/calculator/' ) )?>" class="sect-art">Калькулятор обоев</a>
        </div>
        <div class="basket_m">
            <?php oboishop_woocommerce_cart_link() ?>
        </div>
    </div>
</div>
<div class="form-popup"    >
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
	<div id="content" class="site-content">