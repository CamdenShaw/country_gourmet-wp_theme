<?php
/**
 * The header for Country Gourmet's theme
 * 
 * @package Country_Gourmet_Theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'country-gourmet' ); ?></a>

        <header id="masthead" class="site-header" role="banner">
            <div class="site-branding">
                <h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <p class="site-description"><?php bloginfo( 'description' ); ?></p>
            </div>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
                <div id="primary-menu">
                <?php 
                    wp_nav_menu( array( 'theme_location' => 'primary',
                    'menu_id' => 'primary-menu-container' ) ) ;
                    echo '<a class="icon-search"> <i class=fa fa-search" aria-hidden="true"></i></a>';
                    echo get_search_form();
                ?>
        </header>

        <div class="site-content-contain">
            <div id="content" class="site-content">