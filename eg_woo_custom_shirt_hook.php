<?php

if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
  // some code
			add_action( 'woocommerce_before_single_product_summary' , 'eg_custom_shirt_hook', 5 );

			function eg_custom_shirt_hook() {
				
				 /**
				 * include file for custom shirt design
				 */
				  include_once('template/eg_customize_shirt.php');

			}

}