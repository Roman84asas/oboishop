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

	<footer id="colophon" class="site-footer">
        <div class="footer wrapper">
            <div class="logo_sect_footer">
                <div class="logo-footer">
                    <?php
                    // Get all entered urls from the database
                    $logo = carbon_get_theme_option( 'obo_logo' );
                    if ( $logo) {
                        echo '<a href="' . esc_url( home_url( '/' ) ) . '" >' . wp_get_attachment_image( $logo ) . '</a>';
                    } else {
                        echo '<a href="' . esc_url( home_url( '/' ) ) . '" >SHOP</a>';
                    }
                    ?>
                </div>
                <div class="social-link">
                    <?php
                    $odnokl = carbon_get_theme_option( 'obo_odnoklassniki' );
                    if ($odnokl) { ?>
                        <a href="<?php echo esc_attr($odnokl); ?>" class="ok">
                            <i class="fab fa-odnoklassniki"></i>
                        </a>
                    <?php } ?>

                    <?php
                    $face = carbon_get_theme_option( 'obo_facebook' );
                    if ($face) { ?>
                        <a href="<?php echo esc_attr($face); ?>" class="fb">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    <?php } ?>

                    <?php
                    $insta = carbon_get_theme_option( 'obo_insta' );
                    if ($insta) { ?>
                        <a href="<?php echo esc_attr($insta); ?>" class="insta">
                            <i class="fab fa-instagram"></i>
                        </a>
                    <?php } ?>

                </div>
            </div>

            <div class="bottom-nav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-2',
                    'menu'           => 'Меню 2',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'navbar-nav',
                    'container'      => 'nav',
                    'container_class'=> 'footerMenu',
                    'container_id'   => 'header-nav',
                ) );
                ?>
            </div>

            <div class="stations">
                <a href="#">Статьи</a>
            </div>

            <div class="footer-info">
                <div class="info-my">
                    <div class="number-phone">
                        <?php
                        $phone = carbon_get_theme_option( 'obo_footer_phone' );
                        if ( $phone) { ?>
                            <span class="phone">
                                Телефон:
                            </span>
                            <span class="number">
                                <?php echo esc_attr($phone); ?>
                            </span>
                        <?php } ?>
                    </div>

                    <div class="my-mail">
                        <?php
                        $mail = carbon_get_theme_option( 'obo_footer_email' );
                        if ( $mail) { ?>
                            <span class="label-email">
                                Email:
                            </span>
                            <a href="mailto:<?php echo esc_attr($mail); ?>">
                                <?php echo esc_attr($mail); ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="info-date">
                    Данные с метрик
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>