<?php
/**
 * Template part for home slider
 *
 */
?>

<section class="home_slider">
    <div class="slider_1">
        <?php
        // Get all entered urls from the database
        $image1 = carbon_get_theme_option( 'obo_image1' );
        $image1_url = carbon_get_theme_option( 'obo_url_image1' );
        echo '<a href="' . esc_url( home_url( '/'.$image1_url.'' ) ) . '" >' . wp_get_attachment_image( $image1 ) . '</a>';
        ?>
    </div>
    <div class="slider_2">
        <?php
        // Get all entered urls from the database
        $image2 = carbon_get_theme_option( 'obo_image2' );
        $image2_url = carbon_get_theme_option( 'obo_url_image2' );
        echo '<a href="' . esc_url( home_url( '/'.$image2_url.'' ) ) . '" >' . wp_get_attachment_image( $image2 ) . '</a>';
        ?>
    </div>
    <div class="slider_3">
        <?php
        // Get all entered urls from the database
        $image3 = carbon_get_theme_option( 'obo_image3' );
        $image3_url = carbon_get_theme_option( 'obo_url_image3' );
        echo '<a href="' . esc_url( home_url( '/'.$image3_url.'' ) ) . '" >' . wp_get_attachment_image( $image3 ) . '</a>';
        ?>
    </div>
    <div class="slider_4">
        <?php
        // Get all entered urls from the database
        $image4 = carbon_get_theme_option( 'obo_image4' );
        $image4_url = carbon_get_theme_option( 'obo_url_image4' );
        echo '<a href="' . esc_url( home_url( '/'.$image4_url.'' ) ) . '" >' . wp_get_attachment_image( $image4 ) . '</a>';
        ?>
    </div>
</section>
