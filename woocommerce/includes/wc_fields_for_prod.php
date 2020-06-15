<?php
defined( 'ABSPATH' ) || exit;
function wc_fields_for_prod() {
    $get_tovar         = get_field('tovar');
    $get_articul       = get_field('articul');
    $get_interjer      = get_field('interjer');
    $get_brend         = get_field('brend');
    $get_class         = get_field('class');
    $get_still         = get_field('still');
    $get_land_brend    = get_field('land_brend');
    $get_lenght_mm     = get_field('lenght_mm');
    $get_widht_mm      = get_field('widht_mm');
    $get_large_mm      = get_field('large_mm');
    $get_tolshina_mm   = get_field('tolshina_mm');
    $get_collection    = get_field('collection');
    $get_garantija     = get_field('garantija');
    $get_risunok       = get_field('risunok');
    $get_size_risunka  = get_field('size_risunka');
    $get_type_pokr     = get_field('type_pokr');
    $get_type_soedin   = get_field('type_soedin');
    $get_type_room     = get_field('type_room');
    $get_type_light    = get_field('type_light');
    $get_type_cokol    = get_field('type_cokol');
    $get_type_tovara   = get_field('type_tovara');
    $get_pokritie      = get_field('pokritie');
    $get_vid_mater     = get_field('vid_mater');
    $get_vlagostoikost = get_field('vlagostoikost');
    $get_zamk_sist     = get_field('zamk_sist');
    $get_faska         = get_field('faska');
    $get_coll_polos    = get_field('coll_polos');
    $get_plosh_v_upak  = get_field('plosh_v_upak');
    $get_faktura       = get_field('faktura');
    $get_osnova        = get_field('osnova');
    $get_pult_du       = get_field('pult_du');
    $get_naprjaj_V     = get_field('naprjaj_V');
    $get_forma_plafona = get_field('forma_plafona');
    $get_stepen_zash   = get_field('stepen_zash');
    $get_mat_armaturi  = get_field('mat_armaturi');
    $get_lamp_in_compl = get_field('lamp_in_compl');
    $get_coll_lamp     = get_field('coll_lamp');
    $get_mat_plafon    = get_field('mat_plafon');
    $get_ligth_row_lm  = get_field('ligth_row_lm');
    $get_power_lamp_W  = get_field('power_lamp_W');
    $get_color_temp_K  = get_field('color_temp_K');
    $get_all_power_W   = get_field('all_power_W');

    if($get_tovar){ ?>
        <li class="custom_field">
            <div class="custom_title">Код товара:</div>
            <div class="custom_body"><?php echo $get_tovar; ?></div>
        </li>
    <?php }
    if($get_articul){ ?>
        <li class="custom_field">
            <div class="custom_title">Артикул:</div>
            <div class="custom_body"><?php echo $get_articul; ?></div>
        </li>
    <?php }
    if($get_interjer){ ?>
        <li class="custom_field">
            <div class="custom_title">Интерьер:</div>
            <div class="custom_body"><?php echo $get_interjer; ?></div>
        </li>
    <?php }
    if($get_brend){ ?>
        <li class="custom_field">
            <div class="custom_title">Бренд:</div>
            <div class="custom_body"><?php echo $get_brend; ?></div>
        </li>
    <?php }
    if($get_class){ ?>
        <li class="custom_field">
            <div class="custom_title">Класс:</div>
            <div class="custom_body"><?php echo $get_class; ?></div>
        </li>
    <?php }
    if($get_still){ ?>
        <li class="custom_field">
            <div class="custom_title">Стиль:</div>
            <div class="custom_body"><?php echo $get_still; ?></div>
        </li>
    <?php }
    if($get_land_brend){ ?>
        <li class="custom_field">
            <div class="custom_title">Страна бренда:</div>
            <div class="custom_body"><?php echo $get_land_brend; ?></div>
        </li>
    <?php }
    if($get_lenght_mm){ ?>
        <li class="custom_field">
            <div class="custom_title">Длина (мм):</div>
            <div class="custom_body"><?php echo $get_lenght_mm; ?></div>
        </li>
    <?php }
    if($get_widht_mm){ ?>
        <li class="custom_field">
            <div class="custom_title">Ширина (мм):</div>
            <div class="custom_body"><?php echo $get_widht_mm; ?></div>
        </li>
    <?php }
    if($get_large_mm){ ?>
        <li class="custom_field">
            <div class="custom_title">Высота, мм:</div>
            <div class="custom_body"><?php echo $get_large_mm; ?></div>
        </li>
    <?php }
    if($get_tolshina_mm){ ?>
        <li class="custom_field">
            <div class="custom_title">Толщина (мм):</div>
            <div class="custom_body"><?php echo $get_tolshina_mm; ?></div>
        </li>
    <?php }
    if($get_collection){ ?>
        <li class="custom_field">
            <div class="custom_title">Коллекция:</div>
            <div class="custom_body"><?php echo $get_collection; ?></div>
        </li>
    <?php }
    if($get_garantija){ ?>
        <li class="custom_field">
            <div class="custom_title">Гарантия:</div>
            <div class="custom_body"><?php echo $get_garantija; ?></div>
        </li>
    <?php }
    if($get_risunok){ ?>
        <li class="custom_field">
            <div class="custom_title">Рисунок:</div>
            <div class="custom_body"><?php echo $get_risunok; ?></div>
        </li>
    <?php }
    if($get_size_risunka){ ?>
        <li class="custom_field">
            <div class="custom_title">Размер рисунка:</div>
            <div class="custom_body"><?php echo $get_size_risunka; ?></div>
        </li>
    <?php }
    if($get_type_pokr){ ?>
        <li class="custom_field">
            <div class="custom_title">Тип покрытия:</div>
            <div class="custom_body"><?php echo $get_type_pokr; ?></div>
        </li>
    <?php }
    if($get_type_soedin){ ?>
        <li class="custom_field">
            <div class="custom_title">Тип соединения:</div>
            <div class="custom_body"><?php echo $get_type_soedin; ?></div>
        </li>
    <?php }
    if($get_type_room){ ?>
        <li class="custom_field">
            <div class="custom_title">Тип помещения:</div>
            <div class="custom_body"><?php echo $get_type_room; ?></div>
        </li>
    <?php }
    if($get_type_light){ ?>
        <li class="custom_field">
            <div class="custom_title">Тип лампочки (основной):</div>
            <div class="custom_body"><?php echo $get_type_light; ?></div>
        </li>
    <?php }
    if($get_type_cokol){ ?>
        <li class="custom_field">
            <div class="custom_title">Тип цоколя:</div>
            <div class="custom_body"><?php echo $get_type_cokol; ?></div>
        </li>
    <?php }
    if($get_type_tovara){ ?>
        <li class="custom_field">
            <div class="custom_title">Тип товара:</div>
            <div class="custom_body"><?php echo $get_type_tovara; ?></div>
        </li>
    <?php }
    if($get_pokritie){ ?>
        <li class="custom_field">
            <div class="custom_title">Покрытие:</div>
            <div class="custom_body"><?php echo $get_pokritie; ?></div>
        </li>
    <?php }
    if($get_vid_mater){ ?>
        <li class="custom_field">
            <div class="custom_title">Виды материалов:</div>
            <div class="custom_body"><?php echo $get_vid_mater; ?></div>
        </li>
    <?php }
    if($get_vlagostoikost){ ?>
        <li class="custom_field">
            <div class="custom_title">Влагостойкость:</div>
            <div class="custom_body"><?php echo $get_vlagostoikost; ?></div>
        </li>
    <?php }
    if($get_zamk_sist){ ?>
        <li class="custom_field">
            <div class="custom_title">Замковая система:</div>
            <div class="custom_body"><?php echo $get_zamk_sist; ?></div>
        </li>
    <?php }
    if($get_faska){ ?>
        <li class="custom_field">
            <div class="custom_title">Фаска:</div>
            <div class="custom_body"><?php echo $get_faska; ?></div>
        </li>
    <?php }
    if($get_coll_polos){ ?>
        <li class="custom_field">
            <div class="custom_title">Количество полос:</div>
            <div class="custom_body"><?php echo $get_coll_polos; ?></div>
        </li>
    <?php }
    if($get_plosh_v_upak){ ?>
        <li class="custom_field">
            <div class="custom_title">Площадь в упаковке (м2):</div>
            <div class="custom_body"><?php echo $get_plosh_v_upak; ?></div>
        </li>
    <?php }
    if($get_faktura){ ?>
        <li class="custom_field">
            <div class="custom_title">Фактура:</div>
            <div class="custom_body"><?php echo $get_faktura; ?></div>
        </li>
    <?php }
    if($get_osnova){ ?>
        <li class="custom_field">
            <div class="custom_title">Основа:</div>
            <div class="custom_body"><?php echo $get_osnova; ?></div>
        </li>
    <?php }
    if($get_pult_du){ ?>
        <li class="custom_field">
            <div class="custom_title">Пульт ДУ:</div>
            <div class="custom_body"><?php echo $get_pult_du; ?></div>
        </li>
    <?php }
    if($get_naprjaj_V){ ?>
        <li class="custom_field">
            <div class="custom_title">Напряжение, V:</div>
            <div class="custom_body"><?php echo $get_naprjaj_V; ?></div>
        </li>
    <?php }
    if($get_forma_plafona){ ?>
        <li class="custom_field">
            <div class="custom_title">Форма плафона:</div>
            <div class="custom_body"><?php echo $get_forma_plafona; ?></div>
        </li>
    <?php }
    if($get_stepen_zash){ ?>
        <li class="custom_field">
            <div class="custom_title">Степень защиты, IP:</div>
            <div class="custom_body"><?php echo $get_stepen_zash; ?></div>
        </li>
    <?php }
    if($get_mat_armaturi){ ?>
        <li class="custom_field">
            <div class="custom_title">Материал арматуры:</div>
            <div class="custom_body"><?php echo $get_mat_armaturi; ?></div>
        </li>
    <?php }
    if($get_lamp_in_compl){ ?>
        <li class="custom_field">
            <div class="custom_title">Лампы в комплекте:</div>
            <div class="custom_body"><?php echo $get_lamp_in_compl; ?></div>
        </li>
    <?php }
    if($get_coll_lamp){ ?>
        <li class="custom_field">
            <div class="custom_title">Количество ламп:</div>
            <div class="custom_body"><?php echo $get_coll_lamp; ?></div>
        </li>
    <?php }
    if($get_mat_plafon){ ?>
        <li class="custom_field">
            <div class="custom_title">Материал плафонов:</div>
            <div class="custom_body"><?php echo $get_mat_plafon; ?></div>
        </li>
    <?php }
    if($get_ligth_row_lm){ ?>
        <li class="custom_field">
            <div class="custom_title">Световой поток, lm:</div>
            <div class="custom_body"><?php echo $get_ligth_row_lm; ?></div>
        </li>
    <?php }
    if($get_power_lamp_W){ ?>
        <li class="custom_field">
            <div class="custom_title">Мощность лампы, W:</div>
            <div class="custom_body"><?php echo $get_power_lamp_W; ?></div>
        </li>
    <?php }
    if($get_color_temp_K){ ?>
        <li class="custom_field">
            <div class="custom_title">Цветовая температура, K:</div>
            <div class="custom_body"><?php echo $get_color_temp_K; ?></div>
        </li>
    <?php }
    if($get_all_power_W){ ?>
        <li class="custom_field">
            <div class="custom_title">Общая мощность, W:</div>
            <div class="custom_body"><?php echo $get_all_power_W; ?></div>
        </li>
    <?php }
}