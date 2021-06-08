<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
// ++++++++++++++		style		scripts		+++++++++++++

function burgers_scripts() {
	wp_enqueue_style( 'burgers-style', get_template_directory_uri(). '/assets/css/app.css' );
	wp_style_add_data( 'burgers-style', 'rtl', 'replace' );

	wp_enqueue_script( 'burgers-navigation', get_template_directory_uri() . '/assets/js/app.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'burgers-custom', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'burgers_scripts' );



