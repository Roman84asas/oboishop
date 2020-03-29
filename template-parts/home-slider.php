<?php
/**
 * Template part for home slider
 *
 */

defined( 'ABSPATH' ) || exit;
?>

<section class="home_slider">
    <div class="content_slider">
        <div class="embla">
            <div class="embla__btns" id="carouselButtonsTmp">
                <button class="embla__button embla__button--prev" type="button">
                    <svg class="embla__button__svg"
                         viewBox="137.718 -1.001 366.563 643.999"
                    >
                        <path
                                d="M428.36 12.5c16.67-16.67 43.76-16.67 60.42 0 16.67 16.67 16.67 43.76 0 60.42L241.7 320c148.25 148.24 230.61 230.6 247.08 247.08 16.67 16.66 16.67 43.75 0 60.42-16.67 16.66-43.76 16.67-60.42 0-27.72-27.71-249.45-249.37-277.16-277.08a42.308 42.308 0 0 1-12.48-30.34c0-11.1 4.1-22.05 12.48-30.42C206.63 234.23 400.64 40.21 428.36 12.5z"
                        ></path>
                    </svg>
                </button>
                <button class="embla__button embla__button--next" type="button">
                    <svg class="embla__button__svg" viewBox="0 0 238.003 238.003">
                        <path
                                d="M181.776 107.719L78.705 4.648c-6.198-6.198-16.273-6.198-22.47 0s-6.198 16.273 0 22.47l91.883 91.883-91.883 91.883c-6.198 6.198-6.198 16.273 0 22.47s16.273 6.198 22.47 0l103.071-103.039a15.741 15.741 0 0 0 4.64-11.283c0-4.13-1.526-8.199-4.64-11.313z"
                        ></path>
                    </svg>
                </button>
            </div>
            <div class="embla__viewport is-draggable">
                <div class="embla__container">
                    <div class="embla__slide">
                        <?php
                        // Get all entered urls from the database
                        $image1 = carbon_get_theme_option( 'obo_image1' );
                        $image1_url = carbon_get_theme_option( 'obo_url_image1' );
                        echo '<a href="' . esc_url( home_url( '/'.$image1_url.'' ) ) . '" >' . wp_get_attachment_image( $image1 ) . '</a>';
                        ?>
                    </div>
                    <div class="embla__slide">
                        <?php
                        // Get all entered urls from the database
                        $image2 = carbon_get_theme_option( 'obo_image2' );
                        $image2_url = carbon_get_theme_option( 'obo_url_image2' );
                        echo '<a href="' . esc_url( home_url( '/'.$image2_url.'' ) ) . '" >' . wp_get_attachment_image( $image2 ) . '</a>';
                        ?>
                    </div>
                    <div class="embla__slide">
                        <?php
                        // Get all entered urls from the database
                        $image3 = carbon_get_theme_option( 'obo_image3' );
                        $image3_url = carbon_get_theme_option( 'obo_url_image3' );
                        echo '<a href="' . esc_url( home_url( '/'.$image3_url.'' ) ) . '" >' . wp_get_attachment_image( $image3 ) . '</a>';
                        ?>
                    </div>
                    <div class="embla__slide">
                        <?php
                        // Get all entered urls from the database
                        $image4 = carbon_get_theme_option( 'obo_image4' );
                        $image4_url = carbon_get_theme_option( 'obo_url_image4' );
                        echo '<a href="' . esc_url( home_url( '/'.$image4_url.'' ) ) . '" >' . wp_get_attachment_image( $image4 ) . '</a>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
