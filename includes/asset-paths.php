<?php

/**
 * Asset Path functions.
 */

/**
 * Get the parent asset uri.
 * @param  string $path A custom path to add to the end of the uri path.
 * @return string
 */
function get_parent_asset_uri( $path = '' ) {
	$_path = trailingslashit( get_template_directory_uri() );

	if ( defined( 'CMS_ENVIRONMENT' ) && 'LIVE' == CMS_ENVIRONMENT ) {
		$_path .= 'public/';
	} else {
		$_path .= 'src/';
	}

	$_path .= $path;

	/**
	 * Filter the asset path.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_parent_asset_path', $_path );

	return $_path;
}

/**
 * Get the parent CSS asset uri.
 * @param  string $path A custom path to add to the end of the uri path.
 * @return string
 */
function get_parent_css_uri( $path = '' ) {
	$_path = trailingslashit( get_template_directory_uri() );
	$_path .= 'public/css/';
	$_path .= $path;

	/**
	 * Filter the asset path.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_parent_asset_path', $_path );
	/**
	 * Filter the asset path, specifically for CSS assets.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_parent_css_asset_path', $_path );

	return $_path;
}

/**
 * Get the parent JavaScript asset uri.
 * @param  string $path A custom path to add to the end of the uri path.
 * @return string
 */
function get_parent_js_uri( $path = '' ) {
	$_path = trailingslashit( get_template_directory_uri() );
	$_path .= 'public/js/';
	$_path .= $path;

	/**
	 * Filter the asset path.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_parent_asset_path', $_path );
	/**
	 * Filter the asset path, specifically for JavaScript assets.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_parent_js_asset_path', $_path );

	return $_path;
}

/**
 * Get the parent images asset uri.
 * @param  string $path A custom path to add to the end of the uri path.
 * @return string
 */
function get_parent_images_uri( $path = '' ) {
	$_path = trailingslashit( get_template_directory_uri() );

	if ( defined( 'CMS_ENVIRONMENT' ) && 'LIVE' == CMS_ENVIRONMENT ) {
		$_path .= 'public/';
	} else {
		$_path .= 'src/';
	}

	$_path .= 'images/';
	$_path .= $path;

	/**
	 * Filter the asset path.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_parent_asset_path', $_path );
	/**
	 * Filter the asset path, specifically for image assets.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_parent_images_asset_path', $_path );

	return $_path;
}

/**
 * Get the child asset uri.
 * @param  string $path A custom path to add to the end of the uri path.
 * @return string
 */
function get_child_asset_uri( $path = '' ) {
	$_path = trailingslashit( get_stylesheet_directory_uri() );

	if ( defined( 'CMS_ENVIRONMENT' ) && 'LIVE' == CMS_ENVIRONMENT ) {
		$_path .= 'public/';
	} else {
		$_path .= 'src/';
	}

	$_path .= $path;

	/**
	 * Filter the asset path.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_child_asset_path', $_path );

	return $_path;
}

/**
 * Get the child CSS asset uri.
 * @param  string $path A custom path to add to the end of the uri path.
 * @return string
 */
function get_child_css_uri( $path = '' ) {
	$_path = trailingslashit( get_stylesheet_directory_uri() );
	$_path .= 'public/css/';
	$_path .= $path;

	/**
	 * Filter the asset path.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_child_asset_path', $_path );
	/**
	 * Filter the asset path, specifically for CSS assets.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_child_css_asset_path', $_path );

	return $_path;
}

/**
 * Get the child JavaScript asset uri.
 * @param  string $path A custom path to add to the end of the uri path.
 * @return string
 */
function get_child_js_uri( $path = '' ) {
	$_path = trailingslashit( get_stylesheet_directory_uri() );
	$_path .= 'public/js/';
	$_path .= $path;

	/**
	 * Filter the asset path.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_child_asset_path', $_path );
	/**
	 * Filter the asset path, specifically for JavaScript assets.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_child_js_asset_path', $_path );

	return $_path;
}

/**
 * Get the child images asset uri.
 * @param  string $path A custom path to add to the end of the uri path.
 * @return string
 */
function get_child_images_uri( $path = '' ) {
	$_path = trailingslashit( get_stylesheet_directory_uri() );

	if ( defined( 'CMS_ENVIRONMENT' ) && 'LIVE' == CMS_ENVIRONMENT ) {
		$_path .= 'public/';
	} else {
		$_path .= 'src/';
	}

	$_path .= 'images/';
	$_path .= $path;

	/**
	 * Filter the asset path.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_child_asset_path', $_path );
	/**
	 * Filter the asset path, specifically for image assets.
	 * @param string $_path The current path.
	 * @return string
	 */
	$_path = apply_filters( 'et_child_images_asset_path', $_path );

	return $_path;
}
