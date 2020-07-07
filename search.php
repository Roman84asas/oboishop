<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package oboishop
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>
<div class="content_search">
	<?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>

	<section id="primary" class="search_page wrapper">

		<?php if ( have_posts() ) : ?>
			<h2 class="page_title">
				<?php
				/* translators: %s: search query. */
				printf( esc_html__( 'Резальтат поиска по запросу: %s', 'oboishop' ), '<span>' . get_search_query() . '</span>' );
				?>
			</h2>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				$item = get_post(get_the_ID());
				$imgUrl = get_the_post_thumbnail_url();
				?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="left_sect_search">
                        <a href="<?php echo esc_url(get_the_permalink()); ?>" class="main-kb-img" >
	                        <?php if(!empty($imgUrl)){?>
                                <img src="<?php echo esc_url($imgUrl); ?>" alt="">
                            <?php } else {?>
                                <span>Без фото</span>
                            <?php } ?>
                        </a>
                    </div>
                    <div class="right_sect_search">
	                    <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                        <div class="entry-summary">
	                        <?php echo wp_trim_words( $item->post_excerpt, 25, " ..."); ?>
                        </div>
	                    <a href="<?php echo esc_url(get_the_permalink()); ?>" class="main-kb-item-title">
                            Перейти
                            <i class="fas fa-long-arrow-alt-right"></i>
                        </a>
                    </div>
				</article>
			<?php endwhile;
		else : ?>
			<h2 class="page_title"><?php esc_html_e( 'Ничего не найдено', 'oboishop' ); ?></h2>
            <p>Упс <span>:(</span> что-то пошло не так или по Вашему запросу ничего не найдено. Попробуйте ещё раз.</p>
			<?php
			get_search_form();

		endif;
		?>
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
</div>

<?php
get_footer();
