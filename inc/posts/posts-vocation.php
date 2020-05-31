<?php

add_action('init', 'my_custom_init_vocation');
function my_custom_init_vocation(){
	register_post_type('vocation', array(
		'labels'             => array(
			'name'               => 'Вокансии', // Основное название типа записи
			'singular_name'      => 'Вокансии', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую Вокансии',
			'add_new_item'       => 'Добавить новую Вокансии',
			'edit_item'          => 'Редактировать запись',
			'new_item'           => 'Новая Вокансия',
			'view_item'          => 'Посмотреть Вокансию',
			'search_items'       => 'Найти Вокансию',
			'not_found'          =>  'Таких Вокансий не найденно',
			'parent_item_colon'  => '',
			'menu_name'          => 'Вокансии'

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
		'supports'           => array('title','editor','thumbnail','excerpt')
	) );
}