<?php
defined( 'ABSPATH' ) || exit;

get_header(); ?>
    <section class="all_show_prom wrapper">
	    <h2>Акции и скидки</h2>
	    <div class="cards_for_akcii">
		    <?php
		    $args = array(
			    'post_type' => 'akcii',
			    'posts_per_page' => 12,
			    "orderby" => "date",
			    "order" => "DESC"
		    );
		    $loop = new WP_Query( $args );
		    if ( $loop->have_posts() ) {
			    while ( $loop->have_posts() ) : $loop->the_post();?>
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
			    echo __( 'Акций не найдено' );
		    }
		    wp_reset_postdata();
		    ?>
	    </div>
    </section>

<?php
get_footer();
