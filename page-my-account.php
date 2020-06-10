<?php
/**
 * The template for checkout
 */
defined( 'ABSPATH' ) || exit;

get_header();
?>
    <div id="primary" class="content-my-account">
        <?php
        while ( have_posts() ) :
            the_post();

            the_content();

        endwhile;
        ?>
    </div>
<?php
get_footer();