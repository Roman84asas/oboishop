<?php
/**
 * Template part for section info
 *
 */
?>
<section class="sect-info">
    <div class="sections-otd wrapper">
        <div class="search-sect">
            <?php  echo esc_attr(get_search_form()); ?>
        </div>
        <div class="stations">
            <div class="sect-art">
                Статьи
            </div>
        </div>
        <div class="basket">
            <?php oboishop_woocommerce_cart_link() ?>
            <!--<div class="mini-cart-content ">
                    <?php /*the_widget('WC_Widget_Cart', 'title=') */?>
                </div>-->
        </div>
    </div>
</section>
