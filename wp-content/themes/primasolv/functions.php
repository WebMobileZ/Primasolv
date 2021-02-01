<?php
/**
 * PrimaSolv functions and definitions
 * 
 * @package WordPress
 * @subpackage PrimaSolv
 * @since 1.0.0
 */

function theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );   

}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

if ( ! function_exists( 'primasolv_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function primasolv_setup() {
		

		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.		
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'primasolv' ),
				'top' => __( 'Top Menu', 'primasolv' ),
				'services' => __( 'Services Menu', 'primasolv' ),
				'footer' => __( 'Footer Menu', 'primasolv' ),
				'products' => __( 'Product Menu', 'primasolv' ), 
				'social' => __( 'Social Links Menu', 'primasolv' ),
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
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				//'height'      => 190,
				//'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		
		

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'primasolv_setup' );

/**
 * Register widget area.
 *
 */
function primasolv_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer', 'primasolv' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'primasolv' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'primasolv_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width Content width.
 */
function primasolv_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'primasolv_content_width', 640 );
}
add_action( 'after_setup_theme', 'primasolv_content_width', 0 );

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
// Our custom post type function
function create_posttype() {
 
    register_post_type( 'sliders',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Sliders' ),
                'singular_name' => __( 'Slider' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'sliders'),
        )
    );
       register_post_type( 'testmonials',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testmonials' ),
                'singular_name' => __( 'Testmonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testmonials'),
        )
    );
         register_post_type( 'clients',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Clients' ),
                'singular_name' => __( 'Client' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'clients'),
        )
    );
            /*    register_post_type( 'capabilities',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Capabilities' ),
                'singular_name' => __( 'Capability' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'capabilities'),
        )
    ); 
                   register_post_type( 'team',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Our Team' ),
                'singular_name' => __( 'Team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
        )
    );*/

}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

/* Primasolv Admin Logo Change */
function wpb_login_logo() { 
$custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); 
    echo "<style type='text/css'>
        #login h1 a, .login h1 a {
            background-image: url('".$logo[0]."');
        height:65px;
        width:320px;
        background-size: 320px 65px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
        }
    </style>";
 }
add_action( 'login_enqueue_scripts', 'wpb_login_logo' );
/* end Logo Change */
function ps_login_url() {  return home_url(); }
add_filter( 'login_headerurl', 'ps_login_url' );

function enable_extended_upload ( $mime_types =array() ) {
    $mime_types['svg']  = 'image/svg';
    return $mime_types;
}
add_filter('upload_mimes', 'enable_extended_upload');