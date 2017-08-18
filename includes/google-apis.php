<?php

/**
 * Get the Google API key.
 * @return string
 */
function et_get_google_api_key() {
	/**
	 * Get your Google API Credentials from https://console.developers.google.com/apis/
	 * Make sure to set up restrictions so that the key can only be used from certain HTTP Referrers.
	 */
	$google_api_key = 'as';

	/**
	 * Filter the Google API Key.
	 * @param string $google_api_key
	 * @return string
	 */
	$google_api_key = apply_filters( 'et_google_api_key', $google_api_key );

	return $google_api_key;
}

/**
 * Define whether or not the theme requires a Google Map.
 * @return boolean
 */
function et_theme_requires_google_map() {
	/**
	 * Filter whether or not the theme requires a Google Map.
	 * @param boolean true
	 * @return boolean
	 */
	$requires_google_map = apply_filters( 'et_theme_requires_google_map', true );

	return $requires_google_map;
}


/**
 * Define whether or not the page has a Google Map.
 * @return boolean
 */
function et_page_has_google_map() {
	$page_has_google_map = true;

	/**
	 * Filter whether or not the page has a Google Map.
	 * @param boolean $page_has_google_map  The value to filter, defaults to false.
	 * @return boolean
	 */
	$page_has_google_map = apply_filters( 'et_page_has_google_map', $page_has_google_map );

	return $page_has_google_map;
}

/**
 * Enqueue the Google Maps library and kickstart to load the map initially.
 */
function et_enqueue_google_map_library() {
	if ( !et_get_google_api_key() ) {
		return;
	}

	wp_register_style("google-map-css", get_parent_css_uri( "google-map.min.css" ), false);
	wp_enqueue_style("google-map-css");

	wp_register_script ("google-maps-api", "https://maps.googleapis.com/maps/api/js?libraries=places&key=" . et_get_google_api_key(), array( 'jquery' ), false, true);
	wp_enqueue_script ("google-maps-api");

	wp_register_script ("google-maps-kickstart", get_parent_js_uri( 'google-maps-kickstart.min.js' ), array( 'jquery' ), false, true);
	wp_enqueue_script ("google-maps-kickstart");
}

/**
 * Add the Google API key to the Advanced Custom Fields plugin.
 * @param  array $api  The API credentials in use.
 * @return array
 */
add_filter( 'acf/fields/google_map/api', 'et_add_google_api_credentials_to_acf' );
function et_add_google_api_credentials_to_acf( $api ) {
	if ( et_get_google_api_key() ) {
		$api['key'] = et_get_google_api_key();
	}

	return $api;
}
