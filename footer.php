<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package oboishop
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer wrapper">
        <div class="logo_sect_footer">
            <?php
            the_custom_logo();
            // Get all entered urls from the database
            $logo = carbon_get_theme_option( 'obo_logo' );
            if ( $logo) {
                echo '<a href="' . esc_attr( home_url( '/' ) ) . '" >' . esc_html( $link['label'] ) . '</a>';
            } else {
                echo '<a href="' . esc_attr( home_url( '/' ) ) . '" >SHOP</a>';
            }
            ?>
        </div>

        <div class="bottom-nav">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'navbar-nav',
                'container'      => 'nav',
                'container_class'=> 'footerMenu',
                'container_id'   => 'header-nav',
            ) );
            ?>
        </div>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
