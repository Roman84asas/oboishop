<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package oboishop
 */

get_header();
?>
<div class="content_search">
	<?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>

	<section id="primary" class="search_page wrapper">

		<?php if ( have_posts() ) : ?>
			<h2 class="page-title">
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
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

					<?php oboishop_post_thumbnail(); ?>

					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div>
					<div class="col-sm-6">
						<a href="<?php echo get_the_permalink(); ?>" class="main-kb-item-title"><?php echo $item->post_title; ?></a>
					</div>

				</article>
			<?php endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>


	</section>
</div>

<?php
get_footer();
