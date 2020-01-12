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

    <section class="sidebar">
        сайдбар с категориями товаров
    </section>
    <section class="all-show-info">
        Статьи с информацией и фото
    </section>

<?php get_footer();
