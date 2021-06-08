<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} 
//---------------- регистрация меню----------------
register_nav_menus(
array(
'main-menu' => esc_html__( 'main-menu', 'main-menu' ),    
'short-menu' => esc_html__( 'short-menu', 'short-menu' ),    
'contacts-menu' => esc_html__( 'contacts-menu', 'contacts-menu' ),    
'contacts-menu-categories' => esc_html__( 'contacts-menu-categories', 'contacts-menu-categories' ),    
)
);

// function add_menuclass($ulclass) {
// return preg_replace('/<a /', '<a class="menu__link" ' , $ulclass); }
//   add_filter('wp_nav_menu','add_menuclass');










