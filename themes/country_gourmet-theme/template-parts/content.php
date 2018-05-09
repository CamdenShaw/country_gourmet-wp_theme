<?php
/**
 * Template part for displaying posts.
 *
 * @package Country_Gourmet_Theme
 */

if ( is_archive( 'archive-menu' ) || is_archive( 'taxonomy-menu-typ' ) ) : ?>
    <article <?php post_class(); ?>>
        <header class="entry-header-post">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="product-container"><a class="product-img" href="<?php echo get_permalink(); ?>">
                    <?php the_post_thumbnail( 'medium' ); ?>
                </a></div>
                <div class="text-wrapper">
                    <p class="product-title"><?php the_title(); ?></p>
                    <p class="product-price"><?php echo CFS()->get( 'price' ); ?></p>
                </div>
            <?php endif; ?>
        </header>
    </article>
<?php endif; ?>