<?php
/**
 * burgers functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package burgers
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'burgers_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function burgers_setup() {
	
		load_theme_textdomain( 'burgers', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		
		add_theme_support( 'title-tag' );

	
		add_theme_support( 'post-thumbnails' );

	

		
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'burgers_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'burgers_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function burgers_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'burgers_content_width', 640 );
}
add_action( 'after_setup_theme', 'burgers_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */


/**
 * Enqueue scripts and styles.
 */


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// add_filter('show_admin_bar', '__return_false');

// ====================================

// -------------vidgets---------------
require get_template_directory() . '/includes/widgets.php';

// -------------menus---------------
require get_template_directory() . '/includes/enqueue-style-script.php';

// -------------menus---------------
require get_template_directory() . '/includes/register-menus.php';

//------acf---------
require get_template_directory() . '/includes/acf-options.php';

// -----пользовательские поля
require get_template_directory() . '/includes/reg-post-type.php';


// function add_menuclass($ulclass) {
// return preg_replace('/<a /', '<a class="menu__link"' , $ulclass); }
//   add_filter('wp_nav_menu','add_menuclass');




function get_customer_total_order() {
    $orders = wc_get_orders($args);
    if (empty($orders) || !is_array($orders)) {
        return false;
    }

    $total = array_reduce($orders, function ($carry, $order) {
        $carry += (float)$order->get_total();
        return $carry;
    }, 0.0);

    return $total;
}

// ----------------------------------------------

add_action('wp_ajax_my_action', 'data_fetch');
add_action('wp_ajax_nopriv_my_action', 'data_fetch');

get_template_part( './includes/fetch' ); ?>

<!-- ========================================== -->


























