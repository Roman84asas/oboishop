<?php

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('akcii', array(
		'labels'             => array(
			'name'               => 'Акции и скидки', // Основное название типа записи
			'singular_name'      => 'Акции', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую акцию',
			'edit_item'          => 'Редактировать запись',
			'new_item'           => 'Новая акция',
			'view_item'          => 'Посмотреть акцию',
			'search_items'       => 'Найти акцию или скидку',
			'not_found'          =>  'Таких акций и скидок не найденно',
			'parent_item_colon'  => '',
			'menu_name'          => 'Акции и скидки'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt','comments')
	) );
	register_taxonomy('kat_akcii', 'akcii',array(
		'hierarchical'  => false,
		'labels'        => array(
			'name'                        => _x( 'Категории акций', 'taxonomy general name' ),
			'singular_name'               => _x( 'Категории акций', 'taxonomy singular name' ),
			'all_items'                   => __( 'Все категории' ),
			'parent_item'                 => null,
			'parent_item_colon'           => null,
			'edit_item'                   => __( 'Запищите категорию' ),
			'update_item'                 => __( 'Обновите категорию' ),
			'add_new_item'                => __( 'Добавьте новую категорию' ),
			'menu_name'                   => __( 'Категории акций' ),
		),
		'show_ui'       => true,
		'query_var'     => true,
		//'rewrite'       => array( 'slug' => 'the_writer' ), // свой слаг в URL
	));
}
