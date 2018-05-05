<?php
/**
 * The template for displaying the footer.
 * 
 * @package Country_Gourmet_Theme
 */
?>
                </div> <!-- #content -->
            </div> <!-- .site-content-contain -->
            <footer id="colophon" class="site-footer" role="contentinfo">
                 <!-- <?php /* if ( ! is_active_sidebar( 'footer-widget' ) ) {
                    return; 
                }
                */ ?>
                
                <div id="tertiary" class="footer-widget-area" role="complementary">
                    <?php /* dynamic_sidebar( 'footer-widget' ); */ ?>
                    <div class="footer-logo" ><a href="<?php echo home_url(); ?>">home page</a></div>
                </div>
                <a class="disappear" href="<?php /* echo esc_url( 'https://wordpress.org/' ); */?>"><?php /* printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); */ ?></a> -->
                <p class='copyright'>Copyright <span>© 2018</span> Country Gourmet Cafe & Gallery</p>
            </footer><!-- #colophone -->
        </div><!-- #page --> 
        <?php wp_footer(); ?>
    </body>
</html>