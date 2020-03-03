<?php
/*
  * Template name: Home
  *
 * */
if ( !defined('ABSPATH') ) {
    exit;
}


get_header(); ?>

    <?php get_template_part( 'template-parts/home-slider', 'page' ); ?>

    <?php get_template_part( 'template-parts/section-info', 'page' ); ?>

    <section class="content-shop">
        <?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>
        <section class="all-show-info">
            <div class="products_home">
                <?php
                echo do_shortcode('[recent_products per_page=9" columns="3" orderby="date" order="desc]');
                ?>
            </div>
        </section>
    </section>

<?php get_footer();
