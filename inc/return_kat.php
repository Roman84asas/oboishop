<?php

function return_kat($kat) {
	$returnKat = '';
	if ($kat == 'lamin') {
		$returnKat = '<a href="/product-category/ламинат/" class="main-kb-btn">Перейти в магазин</a>';
	} elseif ($kat == 'oboi') {
		$returnKat = '<a href="/product-category/обои/" class="main-kb-btn">Перейти в магазин</a>';
	} elseif ($kat == 'light') {
		$returnKat = '<a href="/product-category/светильники/" class="main-kb-btn">Перейти в магазин</a>';
	} elseif ($kat == 'all_prod') {
		$returnKat = '<a href="/product-category/светильники/" class="main-kb-btn">Перейти в магазин</a>';
	}
	return $returnKat;
}