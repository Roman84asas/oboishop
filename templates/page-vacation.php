<?php
/*
  * Template name: Вакансии
  * */
if ( !defined('ABSPATH') ) {
    exit;
}

get_header(); ?>

<?php get_template_part( 'template-parts/section-info', 'page' ); ?>

    <section class="content-shop">
        <?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>
        <section class="all-show-info-voc">
            <h2>Вакансии</h2>
            <div class="voc_desc">В настоящий момент наш штат укомплектован, но если Вы считаете, что Ваш опыт и компетенции нам необходимы, то напишите нам на <a href="mailto:hr@oboi-store.ru">hr@oboi-store.ru</a>.</div>
        </section>
    </section>

<?php get_footer();