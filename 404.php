<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package oboishop
 */

get_header(); ?>

<?php get_template_part( 'template-parts/section-info', 'page' ); ?>

    <section class="content-shop">
        <?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>
        <section class="all-no-found">
           <div class="content_not_found">
               <h2>404</h2>
               <p>Страница не найдена!</p>
           </div>
        </section>
    </section>

<?php get_footer();