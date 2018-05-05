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
        <div class="fp-mn-container">
            <h4 class="fp-mn-title">Music Night</h4>
            <div class="fp-mn-content">
                <?php
                    $music_night = get_terms( 'music_nights-type' );
                    if ( ! empty( $music_night ) && ! is_wp_error( $music_night ) ) {
                        $music = $music_night[-1];
                         if( empty( $music->artist_picture )) {
                             echo "<div class='mn-image-container'><img class='$music->slug' src='$music->artist_picture'/></div>";
                         } else {
                             echo "<div class='mn-image-container'><img class='$music->slug' src='/wp-content/uploads/2018/05/country-gourmet-mn-placeholder.jpg'/></div>";
                         }

                        echo "<div class='mn-info-container'>
                                <p class='$music->slug' src='/wp-content/uploads/2018/05/country-gourmet-mn-placeholder.jpg'</p>
                            </div>";
                    } else {
                        echo "<div class='mn-image-container'>
                                <img class='mn-image-placeholder' src='wp-content/uploads/2018/05/country-gourmet-mn-placeholder.jpg'/>
                            </div>
                            <div class='mn-info-container'>
                                <p class='mn-info-placeholder' src='/wp-content/uploads/2018/05/country-gourmet-mn-placeholder.jpg'>Trifecta, cup coffee, shop, est milk coffee cortado java milk. Caramelization carajillo, cappuccino, eu, roast, robust irish id sit mocha. Bar extra galão java, so ristretto robust skinny plunger pot americano.</p>
                            </div>";
                    }
                ?>
            </div>
        </div>
    </main>
    <div class="footer-widget-area">
        <?php get_sidebar( 'footer-widget' ); ?>
    </div>
</div>
<?php get_footer(); ?>
