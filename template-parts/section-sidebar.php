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
</section>
