<?php

/**
 * Registers and enqueues the stylesheets that the theme requires.
 */
function et_enqueue_styles() {	
	if( !is_admin() ) {	
		// Load default theme stylesheet
		wp_register_style("theme_css", get_parent_css_uri( "style.min.css" ), false);
		wp_enqueue_style("theme_css");
	}
}

/**
 * Remove the margin from the admin bar if it exists.
 */
function et_enqueue_admin_bar_styles() {
	if ( !is_admin_bar_showing() ) {
		return;
	}

	?><style>#wpadminbar{margin-top:0;}</style><?php
}
