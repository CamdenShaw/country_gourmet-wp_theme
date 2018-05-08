<?php
/**
 * Social Media Links Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin
 *
 * @package     Country_Gourmet_Social_Media_Links
 * @author      Camden Shaw <https://github.com/CamdenShaw>
 * @license     GPL-2.0+
 * @link        https://github.com/CamdenShaw/country_gourmet-wp_theme
 * @copyright   2018 Camden Shaw
 *
 * @wordpress-plugin
 * Plugin Name:     Social Media Links Widget
 * Plugin URI:      https://github.com/CamdenShaw/country_gourmet-wp_theme
 * Description:     A widget for listing the social media sites your organization uses.
 * Version:         1.0.0
 * Author:          Camden Shaw
 * Author URI:      https://github.com/CamdenShaw
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 */

//Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
    exit;
}

class CG_Social_Media_Links extends WP_Widget {

    /**
     * @TODO - Rename "widget-name" to the name of your widget
     *
     * Unique identifier for your widget
     *
     * @since   1.0.0
     *
     * @var     string
     */
    protected $widget_slug = 'social-media-links';

    /*------------------------------------------------------*/
    /* Constructor
    /*------------------------------------------------------*/

    /**
     * Specifies the classname and description, and instantiates the widget.
     */
    public function __construct() {

        parent::__construct(
            $this->get_widget_slug(),
            'Country Gourmet Social Media',
            array(
                'classname'     => $this->get_widget_slug() . '-class',
                'description'   => "A widget for the business's social media links"
            )
        );
    } // end constructor

    /**
     * Return the widget slug.
     * @since   1.0.0
     *
     * @return  Plugin slug variable
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

    /*-----------------------------------------------------*/
    /* Widget API Functions
    /*-----------------------------------------------------*/

    /**
     * Outputs the content of the widget.
     *
     * @param array $args       The array of form elements
     * @param array $instance   The current instance of the widget
     */
    public function widget( $args, $instance ) {

        if ( ! isset ( $args[ 'widget_id' ] ) ) {
            $args[ 'widget_id' ] = $this->id;
        }

        // go on with your widget logic, put everything into a string and …

        extract( $args, EXTR_SKIP );

        $widget_string = $before_widget;

        // Manipulate the widget's values based on their input fields
        $title = empty( $instance[ 'title' ] ) ? '' : apply_filters( 'widget_title', $instance[ 'title' ] );
        $facebook = empty( $instance[ 'facebook' ] ) ? '' : apply_filters( 'widget_title', $instance[ 'facebook' ] );
        $twitter = empty( $instance[ 'twitter' ] ) ? '' : apply_filters( 'widget_title', $instance[ 'twitter' ] );
        $instagram = empty( $instance[ 'instagram' ] ) ? '' : apply_filters( 'widget_title', $instance[ 'instagram' ] );
        $pinterest = empty( $instance[ 'pinterest' ] ) ? '' : apply_filters( 'widget_title', $instance[ 'pinterest' ] );
        $tumblr = empty( $instance[ 'tumblr' ] ) ? '' : apply_filters( 'widget_title', $instance[ 'tumblr' ] );
        $googleplus = empty( $instance[ 'googleplus' ] ) ? '' : apply_filters( 'widget_title', $instance[ 'googleplus' ] );
        $flickr = empty( $instance[ 'flickr' ] ) ? '' : apply_filters( 'widget_title', $instance[ 'flickr' ] );

        ob_start();

        if ( $title ) {
            $widget_string .= $before_title;
            $widget_string .= $title;
            $widget_string .= $after_title;
        }

        include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
        $widget_string .= ob_get_clean();
        $widget_string .= $after_widget;

        print $widget_string;
    } // end widget

    /**
     * Processes the widget's options to be saved
     *
     * @param array $new_instance   The new instance of values to be generated via the update.
     * @param array $old_instance   The previous instance of values before the update.
     */
    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        $instance[ 'facebook' ] = strip_tags( $new_instance[ 'facebook' ] );
        $instance[ 'twitter' ] = strip_tags( $new_instance[ 'twitter' ] );
        $instance[ 'instagram' ] = strip_tags( $new_instance[ 'instagram ' ] );
        $instance[ 'pinterest' ] = strip_tags( $new_instance[ 'pinterest' ] );
        $instance[ 'tumblr' ] = strip_tags( $new_instance[ 'tumblr' ] );
        $instance[ 'googleplus' ] = strip_tags( $new_instance[ 'googleplus' ] );
        $instance[ 'flickr' ] = strip_tags( $new_instance[ 'flickr' ] );

        return $instance;

    } // end widget
    /**
     * Generates the administration form for the widget.
     *
     * @param array $instance The array of keys and values for the widget.
     */
    public function form( $instance ) {

        $instance = wp_parse_args(
            (array) $instance,
            array(
                'title'         => 'Social Media',
                'facebook'      => '',
                'twitter'       => '',
                'instagram'     => '',
                'pinterest'     => '',
                'tumblr'        => '',
                'googleplus'    => '',
                'flickr'        => ''
            )
        );

        $title = strip_tags( $instance[ 'title' ] );
        $facebook = strip_tags( $instance[ 'facebook' ] );
        $twitter = strip_tags( $instance[ 'twitter' ] );
        $instagram = strip_tags( $instance[ 'instagram' ] );
        $tumblr = strip_tags( $instance[ 'tumblr' ] );
        $googleplus = strip_tags( $instance[ 'googleplus' ] );
        $flickr = strip_tags( $instance[ 'flickr' ] );

        // Disply the admin form
        include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );
    } // end form
} // end class

add_action( 'widgets_init', function() {
    register_widget( 'CG_Social_Media_Links' );
});