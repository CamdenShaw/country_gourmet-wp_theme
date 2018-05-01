<?php 
/**
 * The main template file for country gourmet's theme
 * 
 * @package Country_Gourmet_Theme
 */

get_header(); ?>

    <div class="wrap">
        <h1>Test Theme 1</h1>
    </div>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php if ( have_posts() ) : ?>
                <?php if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>
                <?php endif;

                while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content' );
                endwhile;
                the_posts_navigation();
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;
            ?>
        </main>
    </div>




<?php get_footer();