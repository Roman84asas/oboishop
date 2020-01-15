<?php
/*
  * Template name: Home
  * */


get_header(); ?>

    <section class="home_slider">
        <div class="slider_1">
            Slider №1
        </div>
        <div class="slider_2">
            Slider №2
        </div>
    </section>

    <section class="sect-info">
        <div class="sections-otd wrapper">
            <div class="search-sect">
                <?php  echo esc_attr(get_search_form()); ?>
            </div>
            <div class="stations">
                <div class="sect-art">
                    Статьи
                </div>
            </div>
            <div class="basket">
                <?php oboishop_woocommerce_cart_link() ?>
                <!--<div class="mini-cart-content ">
                    <?php /*the_widget('WC_Widget_Cart', 'title=') */?>
                </div>-->
            </div>
        </div>
    </section>

    <section class="content-shop">
        <section class="sidebar">
            <h3>Каталог товаров</h3>
            <ul class="homepage-category">
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

                    echo '<li class="main-cat-item">';
                    echo '<a href="' . get_term_link( $woo_cat_id, 'product_cat' ) . '"><h4>' . $woo_cat_name . '</h4></a>';
                    echo "</li>\n";
                }
                ?>
                <li class="main-cat-item"><a href="<?php echo esc_url( home_url( '/calculator/' ) )?>"><h4>Калькулятор</h4></a></li>
            </ul>
        </section>
        <section class="all-show-info">
            Статьи с информацией и фото
        </section>
    </section>

<?php get_footer();
