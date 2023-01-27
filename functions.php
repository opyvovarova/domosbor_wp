<?php
/**
 * Domosbor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Domosbor
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function domosbor_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Domosbor, use a find and replace
		* to change 'domosbor' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'domosbor', get_template_directory() . '/languages' );



	// pll_register_string('technologies_title', 'Технологии строительства', 'Domosbor');




	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'domosbor' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
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
			'domosbor_custom_background_args',
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
add_action( 'after_setup_theme', 'domosbor_setup' );


function lct_title ( $sep ) {
	the_title();
	echo ' ' . $sep . ' ';
	bloginfo( 'name' );
}

function text_wrapper($text) {
	$pattern = '/\s+(в|без|до|из|к|на|по|о|от|перед|при|через|с|у|и|нет|за|над|для|об|под|про)\s+/';
	$text = preg_replace($pattern, ' \1&nbsp;', $text);
	$pattern = '/&nbsp;(в|без|до|из|к|на|по|о|от|перед|при|через|с|у|и|нет|за|над|для|об|под|про)\s+/';
	return preg_replace($pattern, '&nbsp;\1&nbsp;', $text);
}

add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
	/*if( !current_user_can('administrator') && !is_admin() ) {
		show_admin_bar( false );
	}*/
	show_admin_bar( false );
}


function create_posts() {
	register_post_type( 'technologies',
		array(
			'labels' => array(
					'name' => __( 'Технологии' ),
					'singular_name'       => __( 'Технология' ),
					'add_new'             => __( 'Добавить новую технологию' ),
					'add_new_item'        => __( 'Добавить новую технологию' ),
					'edit_item'           => __( 'Редактировать технологию' ),
					'new_item'            => __( 'Новая технология' ),
					'view_item'           => __( 'Посмотреть технолоию' ),
					'search_items'        => __( 'Найти технологии' ),
					'not_found'           => __( 'Технологии не найдены' ),
					'not_found_in_trash'  => __( 'В корзине технологии не найдены' ),
			),
			'public'  => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'technologies'),
			'show_in_rest' => true,
			'capability_type' => 'post',
			'supports' => array('title', 'editor')
		) 
	);

	register_post_type( 'architects',
		array(
			'labels' => array(
					'name' => __( 'Архитекторы' ),
					'singular_name'       => __( 'Архитектор' ),
					'add_new'             => __( 'Добавить нового архитектора' ),
					'add_new_item'        => __( 'Добавить нового архитектора' ),
					'edit_item'           => __( 'Редактировать архитектора' ),
					'new_item'            => __( 'Новый архитектор' ),
					'view_item'           => __( 'Посмотреть архитектора' ),
					'search_items'        => __( 'Найти архитектора' ),
					'not_found'           => __( 'Архитекторы не найдены' ),
					'not_found_in_trash'  => __( 'В корзине архитекторы  не найдены' ),
			),
			'public'  => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'architects'),
			'show_in_rest' => true,
			'capability_type' => 'post',
			'supports' => array('title', 'editor')
		) 
 );

 register_post_type( 'designers',
		array(
			'labels' => array(
					'name' => __( 'Дизайнеры' ),
					'singular_name'       => __( 'Дизайнер' ),
					'add_new'             => __( 'Добавить нового дизайнера' ),
					'add_new_item'        => __( 'Добавить нового дизайнера' ),
					'edit_item'           => __( 'Редактировать дизайнера' ),
					'new_item'            => __( 'Новый дизайнер' ),
					'view_item'           => __( 'Посмотреть дизайнера' ),
					'search_items'        => __( 'Найти дизайнера' ),
					'not_found'           => __( 'Дизайнеры не найдены' ),
					'not_found_in_trash'  => __( 'В корзине дизайнеры  не найдены' ),
			),
			'public'  => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'designers'),
			'show_in_rest' => true,
			'capability_type' => 'post',
			'supports' => array('title', 'editor')
		) 
	);

	register_post_type( 'manufactures',
		array(
			'labels' => array(
					'name' => __( 'Заводы' ),
					'singular_name'       => __( 'Завод' ),
					'add_new'             => __( 'Добавить новый завод' ),
					'add_new_item'        => __( 'Добавить новый завод' ),
					'edit_item'           => __( 'Редактировать заводы' ),
					'new_item'            => __( 'Новый завод' ),
					'view_item'           => __( 'Посмотреть заводы' ),
					'search_items'        => __( 'Найти заводы' ),
					'not_found'           => __( 'Заводы не найдены' ),
					'not_found_in_trash'  => __( 'В корзине заводы  не найдены' ),
			),
			'public'  => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'manufactures'),
			'show_in_rest' => true,
			'capability_type' => 'post',
			'supports' => array('title', 'editor')
		) 
	
 );
}


// Hooking up our function to theme setup
add_action( 'init', 'create_posts' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function domosbor_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'domosbor_content_width', 640 );
}
add_action( 'after_setup_theme', 'domosbor_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function domosbor_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'domosbor' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'domosbor' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'domosbor_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function domosbor_scripts() {
	wp_enqueue_style( 'domosbor-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'domosbor-style-main', get_template_directory_uri() . '/assets/css/style.css' );
	wp_style_add_data( 'domosbor-style', 'rtl', 'replace' );

	wp_enqueue_script( 'domosbor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'domosbor-script-main', get_template_directory_uri() . '/assets/js/main.min.js?' . uniqid(), [], 1.1, true);
	wp_enqueue_script( 'domosbor-script-nouislider', get_template_directory_uri() . '/assets/js/nouislider.min.js', array(), true );
	wp_enqueue_script( 'domosbor-script-slimselect', get_template_directory_uri() . '/assets/js/slimselect.min.js', array() , true);
	wp_enqueue_script( 'domosbor-script-imask', get_template_directory_uri() . '/assets/js/imask.min.js', true);
	wp_enqueue_script( 'domosbor-script-swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'domosbor_scripts' );

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
