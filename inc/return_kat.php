<?php
defined( 'ABSPATH' ) || exit;
function return_kat($kat) {
	$returnKat = '';
	if ($kat == 'lamin') {
		$returnKat = '<a href="/product-category/laminat/" class="main-kb-btn">Перейти в магазин</a>';
	} elseif ($kat == 'oboi') {
		$returnKat = '<a href="/product-category/oboi/" class="main-kb-btn">Перейти в магазин</a>';
	} elseif ($kat == 'light') {
		$returnKat = '<a href="/product-category/svetilnik/" class="main-kb-btn">Перейти в магазин</a>';
	} elseif ($kat == 'all_prod') {
		$returnKat = '<a href="/product-category/soputstvujushie/" class="main-kb-btn">Перейти в магазин</a>';
	}
	return $returnKat;
}