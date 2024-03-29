<?php
/**
 * children School functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package children_School
 */

 define('THEME_URL',get_template_directory_uri());

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
function children_school_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on children School, use a find and replace
		* to change 'children-school' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'children-school', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'children-school' ),
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
			'children_school_custom_background_args',
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
add_action( 'after_setup_theme', 'children_school_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function children_school_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'children_school_content_width', 640 );
}
add_action( 'after_setup_theme', 'children_school_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function children_school_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'children-school' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'children-school' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'children_school_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function children_school_scripts() {
	wp_enqueue_style( 'children-school-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'children-school-style', 'rtl', 'replace' );


	wp_enqueue_style('school-bootstrap', THEME_URL . '/assets/css/bootstrap.min.css', array(), _S_VERSION);
	wp_enqueue_style('school-all', THEME_URL . '/assets/css/all.css', array(), _S_VERSION);
	wp_enqueue_style('school-carousel', THEME_URL . '/assets/css/owl.carousel.css', array(), _S_VERSION);
	wp_enqueue_style('school-settings', THEME_URL . '/assets/rs-plugin/css/settings.css', array(), _S_VERSION);
	wp_enqueue_style('school-fabcybox', THEME_URL . '/assets/css/jquery.fancybox.min.css', array(), _S_VERSION);
	wp_enqueue_style('school-animate', THEME_URL . '/assets/css/animate.css', array(), _S_VERSION);

	wp_register_style('FontAwesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css');
	wp_enqueue_style('FontAwesome');

	wp_enqueue_style('school-main', THEME_URL . '/assets/css/style.css', array(), _S_VERSION);


	


	wp_enqueue_script('jquery', THEME_URL . '/assets/js/jquery.min.js',array(), '1.0.0', true);
	wp_enqueue_script('bootstrap-js', THEME_URL . '/assets/js/bootstrap.min.js',array(), '1.0.0', true);
	wp_enqueue_script('popper-js', THEME_URL . '/assets/js/poper.min.js',array(), '1.0.0', true);
	wp_enqueue_script('rs-plugin', THEME_URL . '/assets/rs-plugin/js/jquery.themepunch.revolution.min.js',array(),'1.0.0', true);
	wp_enqueue_script('rs-plugin-js', THEME_URL . '/assets/rs-plugin/js/jquery.themepunch.tools.min.js',array(), '1.0.0', true);
	wp_enqueue_script('fancybox', THEME_URL . '/assets/js/jquery.fancybox.min.js',array(), '1.0.0', true);
	wp_enqueue_script('animate', THEME_URL . '/assets/js/animate.js',array(), '1.0.0', true);
	wp_enqueue_script('wow', THEME_URL . '/assets/js/wow.js',array(), '1.0.0', true);
	wp_enqueue_script('owl-js', THEME_URL . '/assets/js/owl.carousel.js',array(), '1.0.0', true);
	wp_enqueue_script('script-js', THEME_URL . '/assets/js/script.js',array(), '1.0.0', true);
	wp_enqueue_script('navigation', THEME_URL . '/js/navigation.js',array(), '1.0.0', true);

	wp_enqueue_script( 'children-school-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'children_school_scripts' );

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

