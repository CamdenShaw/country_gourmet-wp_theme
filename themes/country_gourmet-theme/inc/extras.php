<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package Country_Gourmet_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function country_gourmet_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 publisher author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    return $classes;
}
add_filter( 'body_class', 'country_gourmet_body_classes' );

// Change the logo on the WP login screen to be Country Gourmet's logo
function country_gourmet_login_logo() {
    $images = wp_get_attachment_image_src(19, "full");
    $image = $images[0];
    echo "<style type='text/css'>
        #login h1 a, .login h1 a {
            background-image: url(" . $image . "); 
            margin:0 auto; 
            background-size: 100%; 
            width: 100%;
        }
    </style>";
}
add_filter( 'login_head', 'country_gourmet_login_logo' );

function country_gourmet_archive_title( $title ) {
    if ( is_post_type_archive( 'staff' ) ) {
        $title = 'Our Staff';
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'country_gourmet_archive_title' );

/* FRONT PAGE HERO BACKGROUND */
function country_gourmet_front_page_dynamic_css() {
    if ( ! is_front_page() ) {
        return;
    }
    $image = CFS()->get( 'front_page_header_image' );
    if ( ! $image ) {
        return;
    }
    $hero_css = ".page-template-default .front-page-header {
        background: linear-gradient( to bottom, rgba(0, 40, 0, 0.4) 0%, rgba(0, 40, 0, 0.4) 100% ), url({$image}) no-repeat center center;
        height: 55vh;
        min-height: 400px;
        width: 90%;
        min-width: 500px;
        background-size: cover, cover;
        margin: 0 auto;
    }";
    wp_add_inline_style( 'country_gourmet-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'country_gourmet_front_page_dynamic_css' );

/* ABOUT HERO BACKGROUND */
function country_gourmet_about_dynamic_css() {
    if( ! is_page_template( 'page-templates/about.php' ) ) {
        return;
    }
    $image = CFS()->get( 'about_header_image' );
    if ( ! $image ) {
        return;
    }
    $banner_css = ".country_gourmet-custom-hero{
        background: linear-gradient(230deg, rgba(0, 0, 0, 0.45) 0, rgba(0, 0, 0, 0.45)),
            url({$image}) no-repeat center top;
           height: 400px;
           background-size: cover;
    }";
    wp_add_inline_style( 'country_gourmet-style', $banner_css );
}
add_action ( 'wp_enqueue_scripts', 'country_gourmet_about_dynamic_css');

function country_gourmet_footer_widget_init() {
    register_sidebar( array(
        'name'          => esc_html( 'Footer Widget' ),
        'id'            => 'footer-widget',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title-footer">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'country_gourmet_footer_widget_init' );

