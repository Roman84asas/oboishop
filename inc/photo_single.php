<?php
function photo_single() {
	$first  = get_field('foto_1');
	$second = get_field('foto_2');
	$third  = get_field('foto_3');
	$fourth = get_field('foto_4');
	$fifth  = get_field('foto_5');
	$sixth  = get_field('foto_6');

	$numb_image = 0;
	$arr_image = [];

	if ($first) {
		$numb_image += 1;
		array_push($arr_image, $first['url']);
	}
	if ($second) {
		$numb_image += 1;
		array_push($arr_image, $second['url']);
	}
	if ($third) {
		$numb_image += 1;
		array_push($arr_image, $third['url']);
	}
	if ($fourth) {
		$numb_image += 1;
		array_push($arr_image, $fourth['url']);
	}
	if ($fifth) {
		$numb_image += 1;
		array_push($arr_image, $fifth['url']);
	}
	if ($sixth) {
		$numb_image += 1;
		array_push($arr_image, $sixth['url']);
	}

	if ($numb_image > 1) {
		$numb_image = 2;
	} elseif ($numb_image == 1) {
		$numb_image = 1;
	} else {
		$numb_image = 0;
	}

	return array($numb_image, $arr_image);
}
