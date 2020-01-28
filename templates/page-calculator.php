<?php
/*
  * Template name: Calculator
  * */
/*
  * Template name: Home
  * */
if ( !defined('ABSPATH') ) {
    exit;
}

get_header(); ?>

    <?php get_template_part( 'template-parts/home-slider', 'page' ); ?>

    <?php get_template_part( 'template-parts/section-info', 'page' ); ?>

    <section class="content-shop">
        <?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>

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