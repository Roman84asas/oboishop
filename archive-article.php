<?php

defined( 'ABSPATH' ) || exit;

get_header(); ?>
	<section class="all_show_prom wrapper">
		<h2>Статьи нашего магазина</h2>
		<div class="cards_for_akcii">

			<?php if ( have_posts() ) {
				while ( have_posts() ) : the_post();?>
					<div class="card_akcii">
						<div class="img_akcii">
							<?php
							$item = get_post(get_the_ID());
							$imgUrl = get_the_post_thumbnail_url();
							$c = "col-sm-6";
							?>
							<div class="<?php echo $c; ?>">
								<a href="<?php echo get_the_permalink(); ?>" class="main-kb-img" <?php if(!empty($imgUrl)){?> style="background-image: url(<?php echo $imgUrl; ?>);"<?php } ?>></a>
							</div>
							<div class="<?php echo $c; ?>">
								<a href="<?php echo get_the_permalink(); ?>" class="main-kb-item-title"><?php echo $item->post_title; ?></a>
							</div>
						</div>
						<p>
							<?php echo wp_trim_words( $item->post_excerpt, 20, " ..."); ?>
						</p>
						<div class="main-kb-meta">
							<?php echo get_the_author_meta("display_name", $item->post_author )?> / <?php echo get_the_date( "j F, Y" ); ?>
							<a href="<?php echo get_the_permalink(); ?>" class="main-kb-more"></a>
						</div>

					</div>
				<?php endwhile;
			} else {
				echo __( 'Статей не найдено' );
			}
			?>
		</div>
		<?php global $wp_query;
		if($wp_query->max_num_pages > 1) {
			?>
			<div class="pagination">
				<div class="left_arrow">
					<?php
					if(get_previous_posts_link()){
						echo get_previous_posts_link('<i class="fa fa-angle-left" aria-hidden="true"></i>');
					} else {
						echo '<i class="fa fa-angle-left" aria-hidden="true"></i>';
					} ?>
				</div>

				<div class="paginate_items">
					<?php oboi_page_links(); ?>
				</div>

				<div class="right_arrow">
					<?php
					if(get_next_posts_link()){
						echo  get_next_posts_link('<i class="fa fa-angle-right" aria-hidden="true"></i>');
					} else {
						echo  '<i class="fa fa-angle-right" aria-hidden="true"></i>';
					} ?>
				</div>
			</div>

		<?php } ?>
	</section>

<?php
get_footer();
