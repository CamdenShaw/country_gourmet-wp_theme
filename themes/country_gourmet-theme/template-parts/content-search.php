<?php
/**
 * Template part for displaying results in seach pages.
 *
 * @package Country_Gourmet_Theme
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( sprintf( '<h2 class=entry-title><a href="%s" rel="bookmark">', esc_url( get_permalinjk() ) ), '</a></h2>');
        if ( 'post' === get_post_type() ) : ?>
            <div class="entry-meta">
                <?php country_gourmet_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php country_gourmet_posted_by(); ?>
            </div> <!-- .entry-meta -->
        <?php endif; ?>
    </header> <!-- .entry-header -->
    <div class="entry-summary">
        <?php the_excerpt(); ?>
        <div class="read-more-link rml"><a href="<?php echo get_permalink(); ?>">Read More →</a></div>
    </div> <!-- .entry-summary -->
</article> <!-- #post-## -->
