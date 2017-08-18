<?php

/**
 * Theme Prefix: et_ (EDGE Template)
 */

/**
 * Load a separate functions file.
 * @param  string $filename The filename to load.
 */
function _load_functions( $filename ) {
  require_once 'includes/' . $filename . '.php';
}

/**
 * Load TGM Plugin Activation Library.
 * @see http://tgmpluginactivation.com/
 */
_load_functions( 'tgm-plugin-activation/class-tgm-plugin-activation' );
_load_functions( 'tgm-plugin-activation/tgm-plugin-settings' );

/**
 * Load general purpose functionality.
 */
_load_functions( 'asset-paths' );

/**
 * Load assets
 */
_load_functions( 'enqueue-styles' );
_load_functions( 'enqueue-scripts' );
_load_functions( 'google-apis' );
_load_functions( 'image-extensions' );

/**
 * Setup the theme.
 */
add_action( 'after_setup_theme', 'et_setup_theme' );
function et_setup_theme() {

	/**
	 * Turn off admin bar
	 */
	show_admin_bar( false );

	/**
	 * Setup text domain
	 */
	load_theme_textdomain( 'edge-template' );

	/**
	 * Enqueue assets
	 */
	add_action( 'wp_enqueue_scripts', 'et_enqueue_styles' );
	add_action( 'wp_head', 'et_enqueue_admin_bar_styles' );

	add_action( 'wp_enqueue_scripts', 'et_enqueue_scripts' );

	if ( et_theme_requires_google_map() && et_page_has_google_map() ) {
		add_action( 'wp_enqueue_scripts', 'et_enqueue_google_map_library' );
	}

	/**
	 * Add custom image sizes
	 */
	foreach ( et_get_theme_image_sizes() as $crop_name => $crop_values) {
		add_image_size( $crop_name, $crop_values['width'], $crop_values['height'], $crop_values['hard_crop'] );
	}

}

/**
 * WordPress Filters
 */
_load_functions( 'dom-classes' );

/**
 * Get the favicon tags for the header.
 */
function et_get_favicons() {
	get_template_part( 'template-parts/header/favicons' );
}

