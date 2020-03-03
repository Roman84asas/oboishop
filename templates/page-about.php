<?php
/*
  * Template name: About
  * */
if ( !defined('ABSPATH') ) {
    exit;
}

get_header(); ?>

<?php get_template_part( 'template-parts/section-info', 'page' ); ?>

    <section class="content-shop">
        <?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>
        <section class="all-show-info">
            Секция О нас
        </section>
    </section>

<?php get_footer();