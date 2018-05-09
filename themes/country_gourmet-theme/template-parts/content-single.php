<?php
/**
 * Template part for displaying single posts.
 *
 * @package Country_Gourmet_Theme
 */
$check = CFS()->get( 'price' );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( $check ) : ?>
        <header class="menu-entry-header">
    <?php endif;
    if ( has_post_thumbnail() ) :
        the_post_thumbnail( 'large' );
    endif;
    if ( $check ) : ?>
        </header>
        <div class="content-container"><?php the_title( '<h1 class="product-entry-title">', '</h1>' );
    else :
        the_title( '<h1 class=entry-title">', '</h1>' );
    endif;

    if ( $check ) : ?>
        <div class="product-entry-meta">
    <?php else : ?>
        <div class="entry-meta">
    <?php endif;
    if ( $check ) : ?>
            <p class="single-menu-price"><?php echo $check; ?></p>
    <?php else :
            country_gourmet_posted_on(); ?> / <?php country_gourmet_comment_count(); ?> / <?php country_gourmet_posted_by(); ?>
        </div> <!-- .entry-meta -->
    </header> <!-- .entry-content -->
    <?php endif;
    if ( $check ) : ?>
        <div class="product-entry-content">
            <?php the_content(); ?>
        </div> <!-- .product-entry-content -->
    </div>
    <div class="social-buttons">
        <div class="facebook read-more-link"><a href="facebook.com" taget="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>Like</a></div>
        <div class="twitter read-more-link"><a href="twitter.com" taget="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>Tweet</a></div>
        <div class="pinterest read-more-link"><a href="pinterest.com" taget="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i>Pin</a></div>
    </div>
    <?php else : ?>
        <div class="entry-content">
            <?php the_content();
    endif ?>
    <?php
        wp_link_pages( array(
            'before'    => '<div class="page-links">' . esc_html( 'Pages:' ),
            'after'     => '</div>',
        ) );
    ?>
    <?php if ( $check ) : ?>
        </div><div class="menu-entry-footer">
    <?php else : ?>
    <footer class="entry-footer">
    <?php endif; ?>
    <?php country_gourmet_entry_footer(); ?>
    </footer> <!-- .entry-footer -->
</article> <!-- #post-## -->
