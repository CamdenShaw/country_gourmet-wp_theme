<?php
/**
 * The template for displaying archive pages.
 *
 * @package Country_Gourmet_Theme
 */

get_header(); ?>

<div id="primary-home" class="content-area">
    <main id="main-home" class="site-main-home" role="main">
        <?php if ( have_posts() ) : ?>
        <header class="page-header">
            <?php
                the_archive_title( '<h1 class="page-title">', '</h1>' );
                the_archive_description( '<div class="taxonomy-description">', '</div>' );
            ?>
        </header> <!-- .page-header -->

            <?php /* Start the Loop */
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page' );
            endwhile;
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
    </main> <!-- #main -->
    <div class="sidebar-widget-area">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
    <div class="footer-widget-area">
        <?php dynamic_sidebar( 'footer-widget' ); ?>
    </div>
</div> <!-- #primary -->

<?php get_footer(); ?>
