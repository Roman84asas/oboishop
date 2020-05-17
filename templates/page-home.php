<?php
/*
  * Template name: Home
  * */
defined( 'ABSPATH' ) || exit;

get_header(); ?>
	<main class="content-home">
		<?php get_template_part( 'template-parts/section-slider', 'page' ); ?>

        <container class="service">
			<div class="main-services-tabs">
				<a href="#tab1" class="tab-link active" data-color=""></a>
				<a href="#tab2" class="tab-link" data-color=""></a>
				<a href="#tab3" class="tab-link" data-color=""></a>
				<a href="#tab4" class="tab-link" data-color=""></a>
			</div>
	        <div class="tabs-container">
				<div id="tab1" class="tab stab active"></div>
				<div id="tab2" class="tab stab"></div>
				<div id="tab3" class="tab stab"></div>
				<div id="tab4" class="tab stab"></div>
	        </div>
        </container>
	</main>
<?php get_footer();