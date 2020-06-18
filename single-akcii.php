<?php
defined( 'ABSPATH' ) || exit;

get_header(); ?>

<div class="single_article wrapper">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="inner_wrapper">
			<h2 class="post_title">
				<?php the_title(); ?>
			</h2>
			<?php
			$imgUrl = get_the_post_thumbnail_url();
			if($imgUrl) { ?>
				<img src="<? echo $imgUrl;?>" alt="Акции Обои плюс">
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
		<?php
		list($count_image, $arr_url_image) = photo_single();
		if ($count_image == 1) { ?>
			<div class="img_block">
				<img src="<?php echo esc_url($arr_url_image[0]); ?>" alt="Фото акционной продукции в Обои плюс">
			</div>
		<?php } elseif ($count_image == 2) { ?>
			<div class="slide">
			<?php foreach ($arr_url_image as $url_image) { ?>
				<img src="<?php echo esc_url($url_image); ?>" alt="Фото акционной продукции в Обои плюс">
			<?php } ?>
			</div>
		<?php } ?>
        <div class="post_content">
			<?php the_content(); ?>
        </div>
		<?php
		$promo_kod = get_field('promo_kod');
		if ($promo_kod){ ?>
			<div class="promo_kod">
				Промо-код: <span><?php echo $promo_kod; ?></span>
			</div>
		<?php }
		$categories = get_the_terms( $post->ID, 'kat_akcii' );
		if (!empty($categories)) {
			foreach ($categories as $categorie) {
				$link_kat = return_kat($categorie->slug);
				echo $link_kat;
			}
        }
		?>

	<?php endwhile;  endif;  ?>
</div>

<?php get_footer(); ?>
