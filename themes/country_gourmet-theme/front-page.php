<?php
/**
 * Template Name: Front Page
 * @package Country_Gourmet_Theme
 */

get_header(); ?>

<div class="flex-preventer">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="front-page-header custom-banner"></header>
    </article>

    <main id="main" class="site-main" role="main">
        <h4 class="fp-menu-title">Menu</h4>
        <div class="fp-menu-items">
            <?php
                $terms = get_terms( 'product-type' );
                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                    echo '<ul>';
                    foreach ( $terms as $term ) {
                        echo '<li><img class="' . $term->slug . '" src=""' . '/>';
                        echo '<p>' . $term->description . '</p> <a href="' . get_term_link( $term ) . '">' . $term->name . '</a>';
                    }
                    echo '</ul>';
                }
            ?>
        </div>
    </main>
</div>
<?php get_footer(); ?>
