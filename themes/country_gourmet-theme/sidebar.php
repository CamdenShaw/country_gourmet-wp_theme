<?php
/**
 * The footer widget containing the main widget areas
 *
 * @package Country_Gourmet_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<section class="country_gourmet-widget">
    <div id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</section>
