<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function my_custom_init(){
register_post_type('slider-bunner', array(
		'labels'             => array(
			'name'               => 'Слайдер-баннер', // Основное название типа записи
			'singular_name'      => 'Слайдер-баннер', // отдельное название записи 
			'add_new'            => 'Добавить слайд' 
		  ),
		'public'             => true,
		'has_archive'        => true,
		'menu_position'      => 4,
		'menu_icon'          =>'dashicons-images-alt',
		'supports'           => array('title','thumbnail','editor')
	) );
}


add_action('init', 'my_custom_init');