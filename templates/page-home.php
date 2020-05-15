<?php
/*
  * Template name: Home
  * */
defined( 'ABSPATH' ) || exit;

get_header(); ?>
	<main class="content-home">
		<?php get_template_part( 'template-parts/section-slider', 'page' ); ?>
	</main>
<?php get_footer();