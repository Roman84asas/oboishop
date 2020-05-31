<?php
defined('ABSPATH') || exit;
get_header(); ?>

	<div class="single_article">
		<div class="wrapper">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div class="inner_wrapper">
					<h2 class="post_title">
						<?php the_title(); ?>
					</h2>
					<?php
					$imgUrl = get_the_post_thumbnail_url();
					if($imgUrl) { ?>
						<img src="<? echo $imgUrl;?>" alt="">
					<?php }
					if(has_excerpt()) { ?>
						<div class="excerpt">
							<?php the_excerpt(); ?>
						</div>
					<?php } ?>
				</div>
				<div class="post_info">
					<div class="post_author">
						<i class="fa fa-user" aria-hidden="true"></i>
						<p>Обои Плюс</p>
					</div>
					<div class="post_date">
						<i class="far fa-clock"></i> <?php echo get_the_date(); ?>
					</div>
				</div>
				<div class="post_content">
					<?php the_content(); ?>
				</div>
			<?php endwhile;  endif;  ?>
		</div>
	</div>

<?php get_footer(); ?>