<?php
/**
 * Template part for section sidebar
 *
 */

defined( 'ABSPATH' ) || exit;
?>
<section class="sidebar">
    <div class="catalog-sidebar">
        <h3>Каталог товаров</h3>
        <ul class="homepage-category">
            <?php
            $prod_cat_args = array(
                'taxonomy'    => 'product_cat',
                'orderby'     => 'id',
                'parent'      => 0
            );
            $woo_categories = get_categories( $prod_cat_args );
            foreach ( $woo_categories as $woo_cat ) {
                $woo_cat_id = $woo_cat->term_id;
                $woo_cat_name = $woo_cat->name;
                $woo_cat_slug = $woo_cat->slug;
                $category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);

                echo '<li class="main-cat-item">';
                echo '<a href="' . get_term_link( $woo_cat_id, 'product_cat' ) . '"><h4>' . $woo_cat_name . '</h4></a>';
                echo "</li>\n";
            }
            ?>

        </ul>
    </div>
    <div class="col-lg-3">
        <div class="f-item-2">
            <div class="f-in">
                <h4 class="orange_dot"><a href="/akcii/">Наши акции</a></h4>
                <div class="new-content-mod">
                    <?php
                    wp_reset_postdata();
                    $args = array(
                        'post_type' => 'akcii',
                        'posts_per_page' => 6,
                        "orderby" => "date",
                        "order" => "DESC"
                    );
                    $news = new WP_Query( $args );
                    ?>

                    <?php while($news->have_posts()) :
                        $news->the_post(); ?>

                        <a href="<?php echo get_the_permalink(); ?>" class="new-item">
                            <?php
                            $img = get_the_post_thumbnail_url();
                            if(empty($img)){ ?>
                                <img src="/wp-content/themes/oboishop/assets/img/logo.png" alt="Обои плюс, ламиант светильники" class="new-block-img-empty">
                            <?php }else{?>
                                <img src="<?php echo $img; ?>" alt="">
                            <?php } ?>
                            <div class="new-block">
                                <p>
                                    <?php the_title(); ?>
                                </p>
                                <div class="date"><i class="icon icon-new1"></i>
                                    <span><?php echo get_the_date("d.m.Y"); ?></span></div>
                            </div>
                        </a>
                    <?php  endwhile; ?>

                    <?php
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>

    </div>
</section>
