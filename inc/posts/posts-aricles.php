<?php
defined( 'ABSPATH' ) || exit;

add_action('init', 'my_custom_article');
function my_custom_article(){
	register_post_type('article', array(
		'labels'             => array(
			'name'               => 'Статьи', // Основное название типа записи
			'singular_name'      => 'Статья', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую статью',
			'edit_item'          => 'Редактировать статью',
			'new_item'           => 'Новая статья',
			'view_item'          => 'Посмотреть статью',
			'search_items'       => 'Найти статью',
			'not_found'          =>  'Такой статьи не найденно',
			'parent_item_colon'  => '',
			'menu_name'          => 'Статьи'

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
		'supports'           => array('title','editor', 'author','thumbnail','excerpt','comments')
	) );
	register_taxonomy('kat_article', 'article',array(
		'hierarchical'  => false,
		'labels'        => array(
			'name'                        => _x( 'Категории статей', 'taxonomy general name' ),
			'singular_name'               => _x( 'Категории статей', 'taxonomy singular name' ),
			'all_items'                   => __( 'Все категории статей' ),
			'parent_item'                 => null,
			'parent_item_colon'           => null,
			'edit_item'                   => __( 'Запищите категорию' ),
			'update_item'                 => __( 'Обновите категорию' ),
			'add_new_item'                => __( 'Добавьте новую категорию' ),
			'menu_name'                   => __( 'Категории статей' ),
		),
		'show_ui'       => true,
		'query_var'     => true,
		//'rewrite'       => array( 'slug' => 'the_writer' ), // свой слаг в URL
	));
}