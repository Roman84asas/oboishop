<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package oboishop
 */

defined('ABSPATH') || exit;
get_header(); ?>

    <section class="all-no-found">
	    <?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>
        <div class="content_not_found">
            <h2>404</h2>
            <p>Страница не найдена!</p>
        </div>
    </section>



<?php get_footer();