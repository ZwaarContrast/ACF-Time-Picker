<?php

/*
Plugin Name: Advanced Custom Fields: Time Picker
Plugin URI: https://github.com/ZwaarContrast/ACF-Time-Picker
Description: Simple ACF field which provides a basic HTML5 time picker field.
Version: 1.0.0
Author: Danny Hoek
Author URI: http://www.zwaarcontrast.nl
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-time_picker', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_time_picker( $version ) {
	
	include_once('acf-time-picker-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_time_picker');	
	
?>