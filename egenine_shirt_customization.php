<?php
/*
Plugin Name: Egenine Shirt Customization
version:1.1
author: Egenine WordPress Team 
description: This is plugin for customize WooCommerce Shirt
*/


include_once( ABSPATH . 'wp-admin/includes/plugin.php' );


Class main {

	function __construct() {


		 /**
		 * include file for custom shirt design
		 */
		  include_once('eg_woo_custom_shirt_hook.php');

		 /**
		 * Include javascript and CSS
		 */
		 add_action('wp_enqueue_scripts','eg_load_js');

		function eg_load_js() {
		     wp_enqueue_script( 'fabric-js', plugins_url( '/assets/js/fabric.js', __FILE__ ));
		     // wp_enqueue_script( 'jquery-js', 'http://deepliquid.com/projects/Jcrop/js/jquery.min.js');
		}

		  add_action('wp_enqueue_scripts', 'callback_for_setting_up_scripts');

		function callback_for_setting_up_scripts() {
			    wp_register_style( 'namespace', plugins_url( '/assets/css/style.css', __FILE__ ));
			    wp_enqueue_style( 'namespace' );
			    wp_register_style( 'eg-shirt', plugins_url( '/assets/css/shirt.css', __FILE__ ));
			    wp_enqueue_style( 'eg-shirt' );
			    wp_register_style( 'responsive', plugins_url( '/assets/css/responsive.css', __FILE__ ));
			    wp_enqueue_style( 'responsive' );
		    }

			function prefix_add_footer_styles() {
			     wp_enqueue_script( 'canvas-js', plugins_url( '/assets/js/canvas.js', __FILE__ ));
			     wp_enqueue_script( 'customiseControls', plugins_url( '/assets/js/customiseControls.js', __FILE__ ));
			     wp_enqueue_script( 'shirt-js', plugins_url( '/assets/js/shirt.js', __FILE__ ));
			};
			add_action( 'get_footer', 'prefix_add_footer_styles' );

   }
}

$class = new main();
