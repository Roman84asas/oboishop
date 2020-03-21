<?php
/*
  * Template name:Акции и скидки
  * */
if ( !defined('ABSPATH') ) {
    exit;
}

get_header(); ?>

<?php get_template_part( 'template-parts/section-info', 'page' ); ?>

    <section class="content-shop">
        <?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>
        <section class="all-show-prom">
            Акции и скидки
        </section>
    </section>

<?php get_footer();