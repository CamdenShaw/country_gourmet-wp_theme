<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @package Country_Gourmet_Theme
 */
?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html( 'Nothing Found' ); ?></h1>
    </header> <!-- .page-header -->

    <div class="page-content">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
            <p><?php printf( wp_kses( 'Ready to publish your first post? <a href="%1$s">Get started herer</a> . ', array( 'a' => array( 'href' => array() ) ) ), esc_url( amdin_url( 'post-new.php' ) ) ); ?></p>
        <?php elseif ( is_search() ) :
            get_search_form();
        else : ?>
            <p><?php echo esc_html( 'It seems we can&rsquo;t find what you&rsquo;re looking for.  Perhaps searching can help.' ); ?></p>
        <?php endif; ?>
    </div> <!-- .page-content -->
</section> <!-- .no-results -->
