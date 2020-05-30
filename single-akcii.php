<?php
defined( 'ABSPATH' ) || exit;

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

        <?php
            list($count_image, $arr_url_image) = photo_single();
            if ($count_image == 1) { ?>
			<div class="img_block">
				<img src="<?php echo esc_url($arr_url_image[0]); ?>" alt="">
			</div>
            <?php } else {
            	foreach ($arr_url_image as $url_image) {?>
		            <img src="<?php echo esc_url($url_image); ?>" alt="">
            <?php }
            } ?>
			<div class="post_content story">
				<?php the_content(); ?>
			</div>

			<div class="post_info">
				<div class="post_author">
					<i class="fa fa-user" aria-hidden="true"></i> <?php echo the_author_posts_link(); ?>
				</div>
				<div class="post_date">
					<i class="far fa-clock"></i> <?php echo get_the_date(); ?>
				</div>
			</div>
		<?php endwhile;  endif;  ?>
		<?php comments_template(); ?>
	</div>
</div>

<?php get_footer(); ?>
