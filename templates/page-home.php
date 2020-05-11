<?php
/*
  * Template name: Home
  * */
defined( 'ABSPATH' ) || exit;

get_header(); ?>
<?php //get_template_part( 'template-parts/section-info', 'page' ); ?>
	<section class="content-home">
		<?php get_template_part( 'template-parts/section-slider', 'page' ); ?>

	</section>



<?php get_footer();