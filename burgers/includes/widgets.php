<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


function burgers_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'contacts-sidebar', 'burgers' ),
			'id'            => 'contacts-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'burgers' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
		);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'contacts-sidebar-categories', 'burgers' ),
			'id'            => 'contacts-sidebar-categories',
			'description'   => esc_html__( 'Add widgets here.', 'burgers' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
		);
	
	
}
add_action( 'widgets_init', 'burgers_widgets_init' );





