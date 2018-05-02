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
    background: linear-gradient(230deg, rgba(0, 0, 0, 0.45) 0, rgba(0, 0, 0, 0,45)),
        url({$image}) no-repeat center bottom;
       height: 100vh;
       background-size: cover;
    }";
    wp_add_inline_style( 'country_gourmet-style', $banner_css );
}
add_action ( 'wp_enqueue_scripts', 'country_gourmet_about_dynamic_css');

