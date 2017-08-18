<?php

/**
 * Registers and enqueues the scripts that the theme requires.
 */
function et_enqueue_scripts() {
	if ( !is_admin() ) {

		// Load specific jQuery library from CDN
		wp_deregister_script("jquery");
		wp_register_script("jquery", apply_filters( 'et_jquery_url', "//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ), false, false, true);
		wp_enqueue_script("jquery");
		wp_add_inline_script( 'jquery', 'jQuery.noConflict();' );

		// Load Custom JS
		wp_register_script ("head_js", get_parent_js_uri( "head.min.js" ) );
		wp_enqueue_script ("head_js");
		
		wp_register_script ("footer_js", get_parent_js_uri( "footer.min.js" ), array( 'jquery' ), false, true);
		wp_enqueue_script ("footer_js");

	}
}
