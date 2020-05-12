<?php
/*
  * Template name: About
  * */
defined( 'ABSPATH' ) || exit;

get_header(); ?>
    <section class="content-shop">
        <?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>
        <section class="all-show-info-about">
            <h2>О нас</h2>
            <div class="happing">Мы рады приветствовать Вас на нашем сайте.</div>
            <p>Основное направление деятельности нашей кампании Обои Плюс - это реализация товаров для отделки помещений и создания уюта.</p>
            <div class="show_for_now">
                <div class="sfn_title">В ассортименте нашего магазина представлены</div>
                <div class="sfn_descr">
                    <span>обои фирмы Rasch - крупнейшего немецкого производителя, известного своим качеством и стилем</span>
                    <span>ламинат Кronotex, Tarkett - придаст Вашему помещению комфорт и тепло</span>
                    <span>светильники новейших коллекций станут неотъемлемой частью Вашего интерьера.</span>
                </div>
            </div>
            <div class="show_for_now">
                <div class="sfn_title">Почему выгодно покупать через сайт ОбоиПлюс.рф?</div>
                <div class="sfn_descr">
                    <span>нет наценки розничного магазина</span>
                    <span>профессиональные консультанты</span>
                    <span>быстрая доставка</span>
                    <span>качественная продукция</span>
                </div>
            </div>
            <div class="your_no_mistake">Вы не ошибетесь, остановив свой выбор на товарах нашего магазина - долгие годы интерьер будет радовать, вдохновлять, дарить комфорт и отличное настроение Вам и Вашим близким.</div>
        </section>
    </section>

<?php get_footer();