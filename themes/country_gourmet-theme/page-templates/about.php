<?php
/**
 * Template Name: About Page
 */
get_header();
?>
<div id="primary" class="content-area">
    <article id="post"-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header custom-hero">
            <div class="container">
                <?php the_title( "<h1 class='entry-title'>", "</h1>" ); ?>
            </div>
        </header>
    </article>

    <main id="main" class="site-main" role="main">
        <div class="main-container">
            <div class="entry-content">
                <div class="country_gourmet-custom-hero"></div>
                <h2>Our Story</h2>
                <?php echo CFS()->get( 'our_story' ); ?>

                <h2>Our Team</h2>
                <?php echo CFS()->get( 'our_team' ); ?>
                <?php
                    $teammates = CFS()->get ('teammates');
                    echo esc_html( $teammates );
                    if ( $teammates !== null ) :
                        foreach ( $teammates as $mate ) :
                ?>
                        <div class="team-container">
                            <img class="teamate-img" src="<?php echo esc_html( $mate['teammates-member-image'] ); ?>" />
                            <h3 class="teammate-name text-uppercase"><?php echo esc_html( $mate['teammate_member_name'] ); ?></h3>
                            <p class="teammate-bio"><?php echo essc_html( $mate['teammate_member_bio'] ); ?> </p>
                        </div>
                <?php
                        endforeach;
                    endif;
                ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer();
