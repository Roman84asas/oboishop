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

    <section class="content-shop wrapper-content">
        <?php get_template_part( 'template-parts/section-sidebar', 'page' ); ?>

        <section class="all-show-info">
            <div class="row-all-calculator">
                <div class="title-calc">
                    <h3>Чтобы узнать, сколько рулонов вам понадобится, используйте наш калькулятор расчета обоев по площади.</h3>
                    <p  class="desc-calc">
                        Заполните размеры комнаты, окон и дверей в ней и параметры обойного рулона. Нажмите кнопку «Рассчитать» и калькулятор выдаст нужное количество рулонов.
                    </p>
                </div>
                <div class="calculator-body">
                    <div class="calc-value-all">
                        <div class="row-calc">
                            <div class="row-calc-input-value">
                                <span class="calc_block_title">Размеры комнаты</span>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_a">Длина комнаты, м:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="5" id="dialogv56ae7f926fba5_a" name="a" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_i">Ширина комнаты, м:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="5" id="dialogv56ae7f926fba5_i" name="i" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_b">Высота комнаты, м:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="2.7" id="dialogv56ae7f926fba5_b" name="b" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row-calc-input-value">
                                <span class="calc_block_title">Размеры двери</span>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_j">Количество дверей, шт:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="1" id="dialogv56ae7f926fba5_j" name="j" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_f">Высота двери,
                                            м:</label>  </div>
                                    <div class="calc_block2">
                                        <input  value="2.3" id="dialogv56ae7f926fba5_f" name="f"
                                                type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_e">Ширина двери,
                                            м:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="0.9" id="dialogv56ae7f926fba5_e" name="e"
                                                type="text">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-calc">
                            <div class="row-calc-input-value">
                                <span class="calc_block_title">Размеры окна</span>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_k">Количество окон,
                                            шт:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="1" id="dialogv56ae7f926fba5_k" name="k"
                                                type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_h">Высота окна,
                                            м:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="1.4" id="dialogv56ae7f926fba5_h" name="h"
                                                type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_g">Ширина
                                            окна,м:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="1.2" id="dialogv56ae7f926fba5_g" name="g"
                                                type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row-calc-input-value">
                                <span class="calc_block_title">Обои</span>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_c">Ширина рулона,
                                            м:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="1.06" id="dialogv56ae7f926fba5_c" name="c"
                                                type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_d">Длина рулона,
                                            м:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="10" id="dialogv56ae7f926fba5_d" name="d"
                                                type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="calc_block">
                                        <label  for="dialogv56ae7f926fba5_d">Раппорт,
                                            см:</label>
                                    </div>
                                    <div class="calc_block2">
                                        <input  value="64" id="dialogv56ae7f926fba5_d" name="r"
                                                type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group-plus">
                        <button id="calc" class="btn-calculate"><b>Рассчитать</b></button>
                    </div>
                    <div class="form-group-sum">
                        <div class="calc_block">
                            <span> Количество рулонов:   </span>
                        </div>
                        <div class="calc_block2">
                            <span id="Q"></span>
                        </div>
                        <br/>
                    </div>
                </div>
            </section>
    </section>

<?php get_footer();