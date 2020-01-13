<?php
/*
  * Template name: Calculator
  * */
/*
  * Template name: Home
  * */


get_header(); ?>

    <section class="home_slider">
        <div class="slider_1">
            Slider №1
        </div>
        <div class="slider_2">
            Slider №2
        </div>
    </section>

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

    <section class="content-shop">
        <section class="sidebar">
            <ul class="homepage-category">
                <?php
                $prod_cat_args = array(
                    'taxonomy'    => 'product_cat',
                    'orderby'     => 'id',
                    'parent'      => 0
                );

                $woo_categories = get_categories( $prod_cat_args );

                foreach ( $woo_categories as $woo_cat ) {
                    $woo_cat_id = $woo_cat->term_id;
                    $woo_cat_name = $woo_cat->name;
                    $woo_cat_slug = $woo_cat->slug;
                    $category_thumbnail_id = get_term_meta($woo_cat_id, 'thumbnail_id', true);

                    echo '<li class="main-cat-item">';
                    echo '<a href="' . get_term_link( $woo_cat_id, 'product_cat' ) . '"><h4>' . $woo_cat_name . '</h4></a>';
                    echo "</li>\n";
                }
                ?>
                <li class="main-cat-item"><a href="<?php echo esc_url( home_url( '/calculator/' ) )?>"><h4>Калькулятор</h4></a></li>
            </ul>
        </section>
        <section class="all-show-info">

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p  class="text-center">Чтобы узнать, сколько рулонов вам понадобится, используйте наш калькулятор расчета обоев по площади. <br>Заполните размеры комнаты, окон и дверей в ней и параметры обойного рулона. Нажмите кнопку «Рассчитать» и калькулятор выдаст нужное количество рулонов.</p>
                    <div class="fieldset">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <span class="calc_block_title">Размеры комнаты</span>
                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_a">Длина комнаты, м:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="5" id="dialogv56ae7f926fba5_a" name="a" type="text">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_i">Ширина комнаты, м:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="5" id="dialogv56ae7f926fba5_i" name="i" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_b">Высота комнаты, м:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="2.7" id="dialogv56ae7f926fba5_b" name="b" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <span class="calc_block_title">Размеры двери</span>
                                <div class="form-group row">

                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_j">Количество дверей, шт:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="1" id="dialogv56ae7f926fba5_j" name="j" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_f">Высота двери,
                                            м:</label>  </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="2.3" id="dialogv56ae7f926fba5_f" name="f"
                                                type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_e">Ширина двери,
                                            м:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="0.9" id="dialogv56ae7f926fba5_e" name="e"
                                                type="text">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <span class="calc_block_title">Размеры окна</span>
                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_k">Количество окон,
                                            шт:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="1" id="dialogv56ae7f926fba5_k" name="k"
                                                type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_h">Высота окна,
                                            м:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="1.4" id="dialogv56ae7f926fba5_h" name="h"
                                                type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_g">Ширина
                                            окна,м:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="1.2" id="dialogv56ae7f926fba5_g" name="g"
                                                type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <span class="calc_block_title">Обои</span>
                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_c">Ширина рулона,
                                            м:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="1.06" id="dialogv56ae7f926fba5_c" name="c"
                                                type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_d">Длина рулона,
                                            м:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="10" id="dialogv56ae7f926fba5_d" name="d"
                                                type="text">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <label  for="dialogv56ae7f926fba5_d">Раппорт,
                                            см:</label>
                                    </div>
                                    <div class="calc_block2 col-xs-6">
                                        <input  value="64" id="dialogv56ae7f926fba5_d" name="r"
                                                type="text">
                                    </div>
                                </div>



                                <div class="form-group row">
                                    <div class="calc_block col-xs-6">
                                        <button id="calc" class="btn btn-primary"><b>Рассчитать</b></button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="calc_block col-xs-6">
                                <span> Количество рулонов:   </span>
                            </div>
                            <div class="calc_block2 col-xs-6"><span id="Q"></span>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>

            </section>
    </section>

<?php get_footer();