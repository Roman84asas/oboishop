<?php
/*
  * Template name: About
  * */
defined( 'ABSPATH' ) || exit;

get_header(); ?>
    <section class="content_about wrapper">
        <h2>О нас</h2>
        <div class="about-top">
            <div class="col-md-6">
                <h1>Обои Плюс — все для Вашего интерьера</h1>
                <p>
                    Основное направление деятельности нашей кампании <span>Обои Плюс</span> - это реализация товаров для отделки помещений и создания уюта, качественное обслуживание и большое разнообразие товаров для Вас и для Вашего дома. Вы не ошибетесь, остановив свой выбор на товарах нашего магазина - долгие годы интерьер будет радовать, вдохновлять, дарить комфорт и отличное настроение Вам и Вашим близким.
                </p>
            </div>
            <div class="col-md-6">
                <img src="/wp-content/themes/oboishop/assets/img/about-img.png"></img>
            </div>
        </div>
        <div class="about-map">
            <h2>Мы в Москве:</h2>
            <div class="russiamap">
                <img src="/wp-content/themes/oboishop/assets/img/map2.png">
            </div>
        </div>
        <div class="our-developments clearfix">
            <h2>Почему выгодно покупать через сайт <span>ОбоиПлюс.рф</span>?</h2>
            <div>
                <div class="our-developments__item">
                    <div class="our-developments__img">
                        <img src="/wp-content/themes/oboishop/assets/img/price.png"></img>
                    </div>
                    <p>
                        Нет наценки розничного магазина
                    </p>
                </div>
                <div class="our-developments__item">
                    <div class="our-developments__img">
                        <img src="/wp-content/themes/oboishop/assets/img/consultant.png"></img>
                    </div>
                    <p>
                        Профессиональные консультанты
                    </p>
                </div>
                <div class="our-developments__item">
                    <div class="our-developments__img">
                        <img src="/wp-content/themes/oboishop/assets/img/delivery.png"></img>
                    </div>
                    <p>
                        Быстрая доставка
                    </p>
                </div>
                <div class="our-developments__item">
                    <div class="our-developments__img">
                        <img src="/wp-content/themes/oboishop/assets/img/product.png"></img>
                    </div>
                    <p>
                        Качественная продукция
                    </p>
                </div>
            </div>
        </div>
        <section class="all-show-info-about wrapper">

            <div class="show_for_now">
                <div class="sfn_title">В ассортименте нашего магазина представлены</div>
                <div class="sfn_descr">
                    <span>обои фирмы Rasch - крупнейшего немецкого производителя, известного своим качеством и стилем</span>
                    <span>ламинат Кronotex, Tarkett - придаст Вашему помещению комфорт и тепло</span>
                    <span>светильники новейших коллекций станут неотъемлемой частью Вашего интерьера.</span>
                </div>
            </div>

        </section>
	    <?php get_template_part( 'template-parts/questions', 'page' ); ?>
    </section>

<?php get_footer();