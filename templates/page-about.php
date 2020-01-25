<?php
/*
  * Template name: About
  * */


get_header(); ?>

<?php get_template_part( 'template-parts/home-slider', 'page' ); ?>

<?php get_template_part( 'template-parts/section-info', 'page' ); ?>

    <section class="content-shop">
        <?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>
        <section class="all-show-info">
            Статьи с информацией и фото
        </section>
    </section>

<?php get_footer();