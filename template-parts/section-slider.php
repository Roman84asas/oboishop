<?php
/**
 * Template part for home slider top
 *
 */

defined( 'ABSPATH' ) || exit;
?>
<div class="mSlider-cont">
	<div class="inner">
	</div>
	<div class="mSlider owl-carousel">
		<div class="mSlider-item mslider1" style='background-image: url(/wp-content/themes/oboishop/assets/img/hotel.jpg);'>
			<div class="inner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6 col-sm-6">
							<img src="/wp-content/themes/oboishop/assets/img/chel.png" alt="">
						</div>
						<div class="col-xs-6 col-sm-6">
							<div class="mSlider-text-cont">
								<div class="mSlider-text">
									<h3>Аксессуары для ремонта и декора Вашего дома!</h3>
									<p>
										Индивидуальная подбор товара под Ваши желания и возможности.
									</p>
                                    <?php
                                        $image4_url = carbon_get_theme_option( 'obo_url_image4' );
                                    ?>
									<a href="<?php echo esc_url( home_url( '/'.$image4_url.'' ) ); ?>" class="mSlider-more">
										Подробнее
										<i class="icon icon-m-more"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mSlider-item mslider1" style='background-image: url(/wp-content/themes/oboishop/assets/img/light.jpg);'>
			<div class="inner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6 col-sm-6">
							<img src="/wp-content/themes/oboishop/assets/img/chel1.png" alt="">
						</div>
						<div class="col-xs-6 col-sm-6">
							<div class="mSlider-text-cont">
								<div class="mSlider-text">
									<h3>Лампы и светильники для любого интерьера!</h3>
									<p>
										Экономные светильники, лампы и люстры на любой вкус.
									</p>
									<?php
									$image3_url = carbon_get_theme_option( 'obo_url_image3' );
									?>
									<a href="<?php echo esc_url( home_url( '/'.$image3_url.'' ) ); ?>" class="mSlider-more">
										Подробнее
										<i class="icon icon-m-more"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mSlider-item mslider1" style='background-image: url(/wp-content/themes/oboishop/assets/img/laminat.jpg);'>
			<div class="inner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6 col-sm-6">
							<img src="/wp-content/themes/oboishop/assets/img/chel2.png" alt="">
						</div>
						<div class="col-xs-6 col-sm-6">
							<div class="mSlider-text-cont">
								<div class="mSlider-text">
									<h3>Ламинат для Вашего дома</h3>
									<p>
										Помощь в подборе ламината под Ваш декор и мебель.
									</p>
									<?php
									$image1_url = carbon_get_theme_option( 'obo_url_image1' );
									?>
									<a href="<?php echo esc_url( home_url( '/'.$image1_url.'' ) ); ?>" class="mSlider-more">
										Подробнее
										<i class="icon icon-m-more"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mSlider-item mslider1" style='background-image: url(/wp-content/themes/oboishop/assets/img/oboi.jpg);'>
			<div class="inner">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-6 col-sm-6">
							<img src="/wp-content/themes/oboishop/assets/img/chel3.png" alt="">
						</div>
						<div class="col-xs-6 col-sm-6">
							<div class="mSlider-text-cont">
								<div class="mSlider-text">
									<h3>Лучшие обои по Вашему желанию</h3>
									<p>
										Огромный выбор обоев и индивидуальный подход при заказе товара.
									</p>
									<?php
									$image2_url = carbon_get_theme_option( 'obo_url_image2' );
									?>
									<a href="<?php echo esc_url( home_url( '/'.$image2_url.'' ) ); ?>" class="mSlider-more">
										Подробнее
										<i class="icon icon-m-more"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
