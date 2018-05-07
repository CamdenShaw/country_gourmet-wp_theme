<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://coex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Country_Gourmet_Theme
 */

get_header(); ?>
<main id="main" class="site-main" role="main">
    <section class="error-404">
        <div class="not-found">
            <h1 class="page-title"><?php echo esc_html( '404' ); ?></h1>
        </div>
        <div class="page-content">
            <p class="404-sentence"><?php echo esc_html( 'Sorry!' ); ?></p>
            <p class="404-sentence"><?php echo esc_html( 'This page connot be found.' ); ?></p>
            <p class="404-sentence"><?php echo esc_html( 'Check the URL again.' ); ?></p>
        </div>
    </section>
</main>
<?php get_footer(); ?>
