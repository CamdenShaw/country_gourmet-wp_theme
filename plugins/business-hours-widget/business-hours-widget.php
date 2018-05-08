<?php
/**
 * Business Hours Widget
 *
 * The RED Widget Boilerplate is an organized, maintainable boilerplate for building widgets using WordPress best practices.
 *
 * Lightly forked from the WordPress Widget Boilerplate by @tommcfarlin.
 *
 * @package   Country_Gourmet_Business_Hours
 * @author   	Camden Shaw <https://github.com/CamdenShaw>
 *
 * @license   GPL-2.0+
 * @link      https://github.com/CamdenShaw/country_gourmet-wp_theme
 * @copyright 2018 Camden Shaw
 *
 * @wordpress-plugin
 * Plugin Name:       Business Hours Widget
 * Plugin URI:        https://github.com/CamdenShaw/country_gourmet-wp_theme
 * Description:       The Red Widget Boilerplate
 * Version:           1.0.0
 * Author:            Camden Shaw
 * Author URI:        https://github.com/CamdenShaw
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

 if ( ! defined ( 'ABSPATH' ) ) {
     exit;
 }

 class Country_Gourmet_Business_Hours extends WP_Widget {
    /**
     * Unique identifier for your widget.

    @since 1.0.0

    @var string
    */
    protected $widget_slug = 'country_gourmet-business_hours';

    /*-----------------------------------------------------*/
    /* Constructor
    /*-----------------------------------------------------*/

    /**
     * Specifies the classname and description, and instantiates the widget
     */

     public function __construct() {

        parent::__construct(
            $this->get_widget_slug(),
                'Country Gourmet Hours & Location',
            array(
                'classname' => $this->get_widget_slug() . '-class',
                'description' => 'Add business hours.'
            )
        );
    } // end constructor

    /**
     * Return the widget slug.
     * 
     * @since 1.0.0
     * 
     * @return Plugin slug variable
     */
    public function get_widget_slug() {
        return $this->widget_slug;
    }

    /*------------------------------------------------------*/
    /* Widget API Functions
    /*------------------------------------------------------*/

    /**
     * Outputs the content of the widget.
     * 
     * @param array $args       The array of form elements
     * @param array $instance   The current instance of the widget
     */

    public function widget( $args, $instance ) {
        if ( ! isset ( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }

        //go on with your widget logic, put everything into a string and ...

        extract( $args, EXTR_SKIP );

        $widget_string = $before_widget;

        // Manipulate the widget's values based based on their input fields
        $title = empty( $instance['title'] ) ? '' : apply_filters( 'widget_title', $instance['title'] );
        $monday = empty( $instance['monday'] ) ? '' : apply_filters( 'widget_title', $instance['monday'] );
        $tuesday = empty( $instance['tuesday'] ) ? '' : apply_filters( 'widget_title', $instance['tuesday']);
        $wednesday = empty( $instance['wednesday'] ) ? '' : apply_filters( 'widget_title', $instance['wednesday'] );
        $thursday = empty( $instance['thursday'] ) ? '' : apply_filters( 'widget_title', $instance['thursday'] );
        $friday = empty( $instance['friday'] ) ? '' : apply_filters( 'widget_title', $instance['friday'] );
        $saturday = empty( $instance['saturday'] ) ? '' : apply_filters( 'widget_title', $instance['saturday'] );
        $sunday = empty( $instance['sunday'] ) ? '' : apply_filters( 'widget_title', $instance['sunday'] );
        $address = empty( $instance['address'] ) ? '' : apply_filters( 'widget_title', $instance['address'] );

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
     * @param array $new_instance   The new instance of values to be generated via the update.Country_Gourmet_Business_Hours
     * @param array $old_instance   The previous instance of values before the update.
     */

     public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;

        $instance['title'] = strip_tags( $new_instance['title'] );
        $instance['monday'] = strip_tags( $new_instance['monday'] );
        $instance['tuesday'] = strip_tags( $new_instance['tuesday']);
        $instance['wednesday'] = strip_tags( $new_instance['wednesday'] );
        $instance['thursday'] = strip_tags( $new_instance['thursday'] );
        $instance['friday'] = strip_tags( $new_instance['friday']);
        $instance['saturday'] = strip_tags( $new_instance['saturday'] );
        $instance['sunday'] = strip_tags( $new_instance['sunday'] );
        $instance['address'] = strip_tags( $new_instance['address'] );

        return $instance;
     } // end widget

     /**
      * Generates the administration form for the widget.
      * 
      * @param array $instance  The array of keys and values for the widget.
      */
    
    public function form( $instance ) {
        $instance = wp_parse_args(
            (array) $instance,
            array(
                'title'     => 'Business Hours',
                'monday'    => '',
                'tuesday'   => '',
                'wednesday' => '',
                'thursday'  => '',
                'friday'    => '',
                'saturday'  => '',
                'sunday'    => '',
                'address'   => ''
            )
        );

        $title = strip_tags( $instance['title'] );
        $monday = strip_tags( $instance['monday'] );
        $tuesday = strip_tags( $instance['tuesday'] );
        $wednesday = strip_tags( $instance['wednesday'] );
        $thursday = strip_tags( $instance['thursday'] );
        $friday = strip_tags( $instance['friday'] );
        $saturday = strip_tags( $instance['saturday'] );
        $sunday = strip_tags( $instance['sunday'] );
        $address = strip_tags( $instance['address'] );
    
        // Display the admin form
        include( plugin_dir_path( __FILE__ ) . 'views/admin.php' );
    } // end form


} //end class

add_action( 'widgets_init', function() {
    register_widget( 'Country_Gourmet_Business_Hours');
});

?>