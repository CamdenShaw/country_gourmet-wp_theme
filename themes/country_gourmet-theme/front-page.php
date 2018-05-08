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
                    $args =  array(
                        'post_type' => 'music_night',
                        'order_by' => 'date',
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'posts_per_page' => '1',
                        'post_status' => 'publish'
                    );
                    $music_night = get_posts( $args );
                    if ( ! empty( $music_night ) && ! is_wp_error( $music_night ) ) {
                        $performer = CFS()->get( false, $music_night[0]->ID );
                         if ( ! empty( $performer['artist_picture'] ) ) {
                             echo "<div class='mn-image-container'><a href='{$music_night[0]->guid}'><img class='music-night {$music_night[0]->post_name}' src='{$performer['artist_picture']}'/></a></div>";
                         } else {
                             echo "<div class='mn-image-container'><a href='{$music_night[0]->guid}'><img class='music-night {$music_night[0]->post_name}' src='/wp-content/uploads/2018/05/country-gourmet-mn-placeholder.jpg'/></a></div>";
                         }

                        echo "<div class='mn-info-container'>
                                <a href='{$music_night[0]->guid}'><h3 class='mn-name {$music_night[0]->post_name}'>{$performer["artist_name"]}</h3></a>
                                <p class='mn-bio {$music_night[0]->post_name}'>{$performer["musician_bio"]}</p>
                                <div class='mn-flex'>
                                    <p class='mn-genre {$music_night[0]->post_name}'>{$performer["music_genre"]}</p>
                                    <p class='mn-price {$music_night[0]->post_name}'>{$performer["performance_price"]}</p>
                                    <p class='mn-date {$music_night[0]->post_name}'>{$performer["date_of_performance"]}</p>
                                </div>
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
        <?php
            $args = array(
                'post_type' => 'artwork',
                'orderby' => 'date'
            );
            $gallery_works = get_posts( $args );
            if ( ! empty( $gallery_works ) && ! is_wp_error( $gallery_works ) ) :
        ?>
        <div class="fp-gallery-container">
            <h4 class="fp-gallery-title">Back Gallery</h4>
            <div class="fp-gallery-content">
            <?php
            $i = 0;
            $x = 0;
                while ( $i < 4 ){
                    foreach ( $gallery_works as $work ) {
                        if ( has_term( array('slug' => 'back-gallery'), 'artworks-type', $work->ID ) ) {
                            $back_gallery = CFS()->get(false, $work->ID);
                            if ( ! empty( $back_gallery ) && ! is_wp_error( $back_gallery ) ) {
                                $i++;
                                echo "<div class='fp-gallery-cell back'>
                                    <a href='{$work->guid}'><h3 class='fp-gallery-title'> {$back_gallery[ 'artwork_title' ] } </h3></a>
                                    <div>
                                        <a href='{$work->guid}'>
                                            <img class='fp-gallery-img {$work->post_name}' src='{$back_gallery[ 'artwork_image' ] }' />
                                        </a>
                                    </div>
                                </div>";
                            }
                        }
                    }
                }
            ?>
            </div>
        </div>
        <div class="fp-gallery-container">
            <h4 class="fp-gallery-title">Front Gallery</h4>
            <div class="fp-gallery-content">
            <?php
                while ( $x < 2 ){
                    foreach ( $gallery_works as $work ) {
                        if ( has_term( array('slug' => 'front-gallery' ), 'artworks-type', $work->ID) ) {
                            $front_gallery = CFS()->get( false, $work->ID );
                            if ( ! empty( $front_gallery ) && ! is_wp_error( $front_gallery ) ) {
                                $x++;
                                echo "<div class='fp-gallery-cell front'>
                                    <a href='{$work->guid}'><h3 class='fp-gallery-title'>{$front_gallery[ 'artwork_title' ]}</h3></a>   
                                    <div>
                                        <a href='{$work->guid}'>
                                            <img class='fp-gallery-img {$work->post_name}' src='{$front_gallery[ 'artwork_image' ]}' />
                                        </a>
                                    </div>     
                                </div>";
                            }
                        }
                    }
                }
            endif; ?>
            </div>
        </div>
    </main>
    <div class="sidebar-widget-area">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
    <div class="footer-widget-area">
        <?php dynamic_sidebar( 'footer-widget' ); ?>
    </div>
</div>
<?php get_footer(); ?>
