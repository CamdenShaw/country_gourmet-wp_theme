<?php
/**
 * Quick Contact Widget Boilerplate
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Boilerplate by @tommcfarlin.
 *
 * @package     Quick Contact
 * @author      Camden Shaw <camden.shaw@gmail.com>
 * @license     GPL-2.0+
 * @link        github.com/CamdenShaw
 * @copyright   2018 Camden Shaw
 *
 * @wordpress-plugin
 * Plugin Name:     Quick Contact Widget
 * Plugin URI:      http://github.com/
 * Description:     The RED Widget Boilerplate
 * Version:         1.0.0
 * Author:          Camden Shaw
 * Author URI:      http://github.com/CamdenShaw
 * License:         GPL-2.0+
 * License URI:     http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
    exit;
}

class CG_Quick_Contact extends WP_Widget {
    /**
     * @TODO = Rename "widget-name to the name of your widget
     *
     * Unique identifier for your widget.
     *
     * @since   1.0.0
     *
     * @var     string
     */
    protected $widget_slug = 'cg-quick-contact-form';

    /*--------------------------------------------------*/
    /* Constructor
    /*--------------------------------------------------*/

    /**
     * Specifies the classname and description, and instantiates the widget.
     */
    public function __construct()
    {
        parent::__construct(
            $this->get_widget_slug(),
            'Country Gourmet Quick Contact',
            array(
                'classname' => $this->get_widget_slug() . '-class',
                'description' => "A widget for the contacting the business quickly."
            )
        );
    } // end constructor

    /**
     * Return the widget slug.
     *
     * @since   1.0.0
     *
     * @return  Plugin slug variable.
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

    /*----------------------------------------------------*/
    /* Widget API Functions
    /*----------------------------------------------------*/

    /**
     * Outputs the content of the widget.
     *
     * @param array $args       The array of form elements
     * @param array $instance   The current instance of the widget
     */
    public function widget( $args, $instance )
    {
        if ( ! isset ( $args[ 'widget_id' ] ) ) {
            $args[ 'widget_id' ] = $this->id;
        }

        // go on with your widget logic, put everything into a string and …

        extract( $args, EXTR_SKIP );

        $widget_string = $before_widget;

        // Manipulate the widget's values based on their input fields
        $title = empty( $instance[ 'title' ] ) ? '' : apply_filters( 'widget_title', $instance[ 'title' ] );
        $message = empty( $instance[ 'message' ] ) ? '' : apply_filters( 'widget_title', $instance[ 'message' ] );

        ob_start();

        if( $title ) {
            $widget_string .= $before_title;
            $widget_string .= $title;
            $widget_string .= $after_title;
        }

        include( plugin_dir_path( __FILE__ ) . 'views/widget.php' );
        $widget_string .= ob_get_clean();
        $widget_string .= $after_widget;

        print $widget_string;
    }

    /**
     * Processes the widget's options to be saved
     *
     * @param array $new_instance   The new instance of values to be generated via the update.
     * @param array $old_instance   The previous instance of values before the update.
     */
    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
        $instance[ 'message' ] = strip_tags( $new_instance[ 'message' ] );

        return $instance;
    }

    /**
     * Generates the administration for for the widget.
     *
     * @param array $instance   The array of keys and values for the widget.
     */
    public function form( $instance ) {

        $instance = wp_parse_args(
            (array) $instance,
            array(
                'title' => 'Quick Contact Form',
                'message' => ''
            )
        );

        $title = strip_tags( $instance[ 'title' ] );
        $message = strip_tags( $instance[ 'message' ] );

        // Display the admin form

        include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );

    }

}

add_action( 'widgets_init', function() {
    register_widget( 'CG_Quick_Contact' );
});