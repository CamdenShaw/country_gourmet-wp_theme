<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Country_Gourmet_Theme
 */

if ( is_home() || is_archive() ) : ?>
    <article is="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php if ( has_post_thumbnail() ) :
                the_post_thumbnail( 'large' );
            endif;
            the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php country_gourmet_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php country_gourmet_posted_by(); ?>
            </div> <!-- .entry-meta -->
            <?php endif; ?>
        </header>
        <div class="entry-content">
            <?php the_excerpt(); ?>
            <div class="read-more-link rml"><a href="<?php echo get_permalink(); ?>"> Read More →</a></div>
        </div> <!-- .entry-content -->
    </article> <!-- #post-## -->
    <?php else : ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header>
        <div class="etnry-content">
            <?php the_content();
            wp_link_pages( array(
                'before'    => '<div class="page-links">' . esc_html( 'Pages:' ),
                'after'     => '</div>'
            ) );
            ?>
        </div> <!-- .entry-content -->
    </article> <!-- #post-## -->
<?php endif; ?>
