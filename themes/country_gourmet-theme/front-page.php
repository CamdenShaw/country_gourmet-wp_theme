<?php
/**
 * Template Name: Front Page
 * @package Country_Gourmet_Theme
 */

get_header(); ?>

<div class="flex-preventer">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="front-page-header custom-banner">
            <?php
            $main_menu = get_terms("menus-type", array(
                'hide_empty' => false,
                'parent' => 0,
                'slug' => 'main-menu'
            ) );
            if ( ! is_wp_error( $main_menu ) ) {
                foreach ($main_menu as $main) {
                    echo "<a href='" . get_term_link($main) . "' class='fp-$main->slug'><div><p>$main->name</p></div></a>";
                }
            }
            ?>
            <div class="fp-menu-link-container">
                <?php
                $categories = get_terms( 'menus-type', array(
                    'hide_empty' => false,
                    'parent' => 2
                ) );
                if ( ! is_wp_error( $categories ) ) {
                    foreach ( $categories as $category ) {
                        echo "<a href='" . get_term_link( $category ) . "'><div class='fp-$category->slug'><p>$category->name</p></div></a>";
                    }
                }
                $menus = get_terms( 'menus-type', array(
                    'hide_empty' => false,
                    'parent' => 0
                ) );
                if ( ! is_wp_error( $menus ) ) {
                    foreach ( $menus as $menu ) {
                        if ( $menu->slug !== 'main-menu' ) {
                            echo "<a href='" . get_term_link( $menu ) . "'><div class='fp-$menu->slug'><p>$menu->name</p></div></a>";
                        }
                    }
                }
                ?>
            </div>
        </header>
    </article>
    <div class="test">
    </div>

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
    <div class="footer-widget-area">
        <?php get_sidebar( 'footer-widget' ); ?>
    </div>
</div>
<?php get_footer(); ?>
