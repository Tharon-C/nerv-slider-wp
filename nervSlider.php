<?php
/**
 * Plugin Name: Nerv Slider
 * Plugin URI: http://www.builtbyevolve.com/work/plugins/nerve-slider.php
 * Description: A port of the nerv slider. Slider is loaded from html. Visit site for details 
 * Version: 9.4
 * Author: Ported by Tharon Carlson
 * Author URI: http://tharoncarlson.com
 * Text Domain:
 * Domain Path: 
 * Network:
 * License:GPL2
 */

/*  Copyright YEAR  Tharon Carlson  (email : design@tharoncarlson.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Load Scripts
add_action('wp_enqueue_scripts','ns_scripts');
add_action('wp_enqueue_scripts', 'ns_styles'); // Add Theme Stylesheet

function ns_scripts() {
    wp_enqueue_script( 'jquery-ui-js', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js', array('jquery'), '1.0');
    wp_enqueue_script( 'nerveSlider-js', plugins_url( 'jquery.nerveSlider.js', __FILE__ ), array('jquery'), '1.0', true);
}

function ns_styles() {
    wp_register_style('nerveSlider-css', plugins_url('nerveSlider.css', __FILE__ ), array(), '1.0', 'all');
    wp_enqueue_style('nerveSlider-css'); // Enqueue it!
}

?>