<?php
/**
 * Country Gourmet Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Country_Gourmet_Theme
 */

if ( ! function_exists( 'country_gourmet_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     */
    function country_gourmet_setup() {
        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location
        register_nav_menus( array(
            'primary' => esc_html( 'Primary Menu' ),
        ) );

        //Switch search form, comment form, and comments to output valid HTML5.
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );

    }
endif; // country_gourmet_setup
add_action( 'after_setup_theme', 'country_gourmet_setup' );

/**
 * Set the content width in pixels, based on the them's design and stylesheet.
 *
 * @global int $content_width
 */
function country_gourmet_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'country_gourmet_content_width', 640 );
}
add_action( 'after_setup_theme', 'country_gourmet_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function country_gourmet_sidebar_widget_init() {
    register_sidebar( array(
        'name'          => esc_html( 'Sidebar' ),
        'id'            => 'sidebar-1',
        'description'   =>  '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title country_gourmet-text-uppercase">',
        'after_title'   => '</h2>'
    ) );
}
add_action( 'widgets_init', 'country_gourmet_sidebar_widget_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function country_gourmet_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
    if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
        $stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
    }

    return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'country_gourmet_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function country_gourmet_scripts() {
    wp_enqueue_style( 'country_gourmet-style', get_stylesheet_uri() );

    wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/5e78ddec57.js', array(), '4.7.0', false );

    wp_enqueue_script( 'country_gourmet_cuppaJoe', get_template_directory_uri(), '/build/js/cuppaJoe.min.js', array(), '20130115', true );

}
add_action( 'wp_enqueue_scripts', 'country_gourmet_scripts' );

/**
 * Increase posts allowed for menu
 */
function wparchives_query( $is_it ) {
    if ( $is_it->is_archive() && $is_it->is_main_query() && !is_admin() ) {
        $is_it->set( 'posts_per_page', 1000 );
    }
}
add_action( 'pre_get_posts', 'wparchives_query' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';