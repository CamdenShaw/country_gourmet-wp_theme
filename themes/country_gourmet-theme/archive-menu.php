<?php
/**
 * ARCHIVE MENU
 */

get_header(); ?>

<main id="primary" class="site-main" role="main">
<?php if ( have_posts() ) : ?>
    <header class="page-header">
    <?php
        add_filter( 'get_the_archive_title', 'modify_archive_title', 10, 1 );
        function modify_archive_title( $title ) {
            $new_title = substr_replace( $title, '', 0, strlen( 'Archive: ' ));
            return "<h1 class='page-title'>$new_title</h1>";
        }
        the_archive_title();
        the_archive_description( '<div class="taxonomy-description">', '</div>')
    ?>
    </header>
    <div class="archive-menus">
        <?php
            $terms = get_terms( 'menus-type', array(
                'hide_empty' => false,
                'parent' => 0
            ) );
            if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                echo '<ul>';
                foreach ( $terms as $term ) {
                    echo '<li class="menus"><a href="' . get_term_link( $term ) . '">' . $term->name . '</a></li>';
                }
                echo '</ul>';
            }
        ?>
    </div>
<?php endif; ?>
</main>
<div class="sidebar-widget-area">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
<div class="footer-widget-area">
    <?php dynamic_sidebar( 'footer-widget' ); ?>
</div>

<?php get_footer();