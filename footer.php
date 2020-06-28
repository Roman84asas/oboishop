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
defined( 'ABSPATH' ) || exit;
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="footer wrapper">
            <div class="logo_sect_footer">
                <div class="logo-footer">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">
                        <img src="/wp-content/themes/oboishop/assets/img/map3.png" alt="Магазин Обои плюс на карте">
                    </a>
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
            <div class="col-lg-3">
                <div class="f-item-2">
                    <div class="f-in">
                        <h4 class="orange_dot"><a href="/article/">Новые статьи</a></h4>
                        <div class="new-content-mod">
		                    <?php

		                    wp_reset_postdata();


		                    $args = array(
			                    'post_type' => "article",
			                    'posts_per_page' => 3,
			                    'orderby' => 'date',
			                    'order' => 'DESC'
		                    );

		                    $news = new WP_Query( $args );
		                    ?>

		                    <?php while($news->have_posts()) :
			                    $news->the_post(); ?>

                                <a href="<?php echo get_the_permalink(); ?>" class="new-item">
				                    <?php
				                    $img = get_the_post_thumbnail_url();
				                    if(empty($img)){ ?>
                                        <img src="/wp-content/themes/oboishop/assets/img/logo.png" alt="Лучшие обои - Обои плюс" class="new-block-img-empty">
				                    <?php }else{?>
                                        <img src="<?php echo $img; ?>" alt="Лучшие обои - Обои плюс">
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
                    <!-- Yandex.Metrika informer -->
                    <a href="https://metrika.yandex.ru/stat/?id=65228689&amp;from=informer"
                       target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/65228689/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
                                                           style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="65228689" data-lang="ru" /></a>
                    <!-- /Yandex.Metrika informer -->

                    <!-- Yandex.Metrika counter -->
                    <script type="text/javascript" >
                        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
                            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
                        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

                        ym(65228689, "init", {
                            clickmap:true,
                            trackLinks:true,
                            accurateTrackBounce:true
                        });
                    </script>
                    <noscript><div><img src="https://mc.yandex.ru/watch/65228689" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                    <!-- /Yandex.Metrika counter -->
                </div>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
