<?php
/**
 * The template for cart
 */
defined( 'ABSPATH' ) || exit;

get_header();
?>
    <div id="primary" class="content-cart wrapper">
            <?php
            while ( have_posts() ) :
                the_post();

                the_content();

            endwhile;
            ?>
    </div>
<?php
get_footer();