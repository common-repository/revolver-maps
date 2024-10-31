<?php
/**
* Plugin Name: Revolver Maps
* Plugin URI: http://alfoid.net/revolvermaps/
* Description: Revolver Maps are interactive visitor globes rendered by the Revolver Engine. Every visitor leaves an eternal dot on the globe, recent visitors are tagged by the labels showing flag, city and state. The Revolver Graphics Engine is a strongly specialized 3D renderer. It's available as a Java version as well as a Flash version. The RevolverMaps Service bases on both implementations. More info: visit www.revolvermaps.com 
* Author: Alfoid
* Version: 1.0
* Author URI: http://alfoid.net/
* License: GPL2
* Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)
*
* This program is free software; you can redistribute it and/or modify
* it under the terms of the GNU General Public License, version 2, as 
* published by the Free Software Foundation.
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with this program; if not, write to the Free Software
* Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

class RevolverWidget extends WP_Widget {
    function RevolverWidget() {
        parent::WP_Widget(false, $name = 'Revolver Maps');
    }
	
	function form($instance) {
        $title = esc_attr($instance['title']);
        $dis_posts = esc_attr($instance['dis_posts']);
        ?>
     <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></label></p>
        <?php
    }
	
	function widget($args, $instance) {
    extract( $args );
    $title = apply_filters('widget_title', $instance['title']);
    ?>
      <?php echo $before_widget; ?>
         <?php if ( $title )
            echo $before_title . $title . $after_title; 
 	function revolver_widget() {
	echo "<script type='text/javascript' src='http://jh.revolvermaps.com/j.js'></script><script type='text/javascript'>rm_j1st('1','300','true','false','000000','7jfchi4ezvk','true','ff0000');</script><noscript><applet codebase='http://rh.revolvermaps.com/j' code='core.RE' width='300' height='300' archive='g.jar'><param name='cabbase' value='g.cab' /><param name='r' value='true' /><param name='n' value='false' /><param name='i' value='7jfchi4ezvk' /><param name='m' value='1' /><param name='s' value='300' /><param name='c' value='ff0000' /><param name='v' value='true' /><param name='b' value='000000' /><param name='rfc' value='true' /></applet></noscript>";
}
	revolver_widget();   
 
    echo $after_widget; 
    }
}

	function revolver() {
 	register_sidebar_widget(__('Revolver Maps'), 'revolver_widget');
}
	add_action('plugins_loaded', "revolver");
	add_action('widgets_init', create_function('', 'return register_widget("RevolverWidget");')); 
	wp_register_sidebar_widget(
    'R-Maps 1.0',        // your unique widget id
    'Revolver Maps',          // widget name
    'rev_maps_display',  // callback function
    array(                  // options
        'description' => 'Revolver Maps are interactive visitor globes rendered by the Revolver Engine. Every visitor leaves an eternal dot on the globe, recent visitors are tagged by the labels showing flag, city and state. The Revolver Graphics Engine is a strongly specialized 3D renderer. It is available as a Java version as well as a Flash version. The RevolverMaps Service bases on both implementations.
'
    )
);


?>