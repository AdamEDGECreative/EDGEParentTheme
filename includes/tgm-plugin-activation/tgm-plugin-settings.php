<?php
/**
 * This file sets up the code that this theme uses to register
 * the required plugins.
 *
 * @see http://tgmpluginactivation.com/configuration/ for detailed documentation.
 *
 * @package    TGM-Plugin-Activation
 * @subpackage Example
 * @version    2.6.1 for parent theme EDGE Template WordPress Theme
 * @author     Thomas Griffin, Gary Jones, Juliette Reinders Folmer
 * @copyright  Copyright (c) 2011, Thomas Griffin
 * @license    http://opensource.org/licenses/gpl-2.0.php GPL v2 or later
 * @link       https://github.com/TGMPA/TGM-Plugin-Activation
 */

/**
 * Register the required plugins for this theme.
 * 
 * The variables passed to the `tgmpa()` function should be:
 * - an array of plugin arrays;
 * - optionally a configuration array.
 * If you are not changing anything in the configuration array, you can remove the array and remove the
 * variable from the function call: `tgmpa( $plugins );`.
 * In that case, the TGMPA default settings will be used.
 *
 * @hooked 'tgmpa_register' Fired on the WordPress 'init' hook at priority 10.
 */
add_action( 'tgmpa_register', 'et__register_required_plugins' );
function et__register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(

		/**
		 * Manifest
		 * 
		 * --- Required ---
		 * Advanced Custom Fields 									[WordPress.org]
		 * Advanced Custom Fields Extensions 				[Custom]
		 * Advanced Custom Fields Flexible Content 	[Add On]
		 * Advanced Custom Fields Options Page 			[Add On]
		 * Advanced Custom Fields Repeater					[Add On]
		 * EDGE Theme Extensions 										[Custom]
		 * WordPress Menu Query 										[Custom]
		 * 
		 * --- Recommended ---
		 * Advanced Custom Fields Gallery						[Add On]
		 * AIWOPS Security 													[WordPress.org]
		 * Are you a robot ReCaptcha								[WordPress.org]
		 * Disable Emojis 													[WordPress.org]
		 * Duplicate & Merge Posts 									[WordPress.org]
		 * Force Regenerate Thumbnails 							[WordPress.org]
		 * Velvet Blues Update URLs 								[WordPress.org]
		 * WordPress Importer 											[WordPress.org]
		 * WordPress SEO Yoast											[WordPress.org]
		 * WP Defender 															[WordPress.org]
		 * WP Smush 																[WordPress.org]
		 */
		
		/** Template
		// * 
		array(
			'name'      => '',
			'slug'      => '',
			'source'    => 'GITHUBURL/archive/master.zip',
			'required'  => false,
		),
		//*/
		
		// --- Required ---

		// * Advanced Custom Fields [WordPress.org]
		array(
			'name'      => 'Advanced Custom Fields',
			'slug'      => 'advanced-custom-fields',
			'required'  => true,
		),

		// * Advanced Custom Fields Extensions [Custom]
		array(
			'name'      => 'Advanced Custom Fields Extensions',
			'slug'      => 'advanced-custom-fields-extensions',
			'source'    => 'https://github.com/AdamEDGECreative/ACFExtensions/archive/master.zip',
			'required'  => true,
		),

		// * Advanced Custom Fields Flexible Content [Add On]
		array(
			'name'      => 'Advanced Custom Fields: Flexible Content Field',
			'slug'      => 'acf-flexible-content',
			'source'    => 'https://github.com/AdamEDGECreative/ACFFlexibleContent/archive/master.zip',
			'required'  => true,
		),

		// * Advanced Custom Fields Options Page [Add On]
		array(
			'name'      => 'Advanced Custom Fields: Options Page',
			'slug'      => 'acf-options-page',
			'source'    => 'https://github.com/AdamEDGECreative/ACFOptions/archive/master.zip',
			'required'  => true,
		),

		// * Advanced Custom Fields Repeater [Add On]
		array(
			'name'      => 'Advanced Custom Fields: Repeater Field',
			'slug'      => 'acf-repeater',
			'source'    => 'https://github.com/AdamEDGECreative/ACFRepeater/archive/master.zip',
			'required'  => true,
		),

		// * EDGE Template Extensions [Custom]
		array(
			'name'      => 'EDGE Theme Extensions',
			'slug'      => 'edge-template-extensions',
			'source'    => 'https://github.com/AdamEDGECreative/EDGETemplateExtensions/archive/master.zip',
			'required'  => true,
		),

		// * WordPress Menu Query [Custom]
		array(
			'name'      => 'WordPress Menu Query',
			'slug'      => 'wordpress-menu-query',
			'source'    => 'https://github.com/AdamEDGECreative/WordPressMenuQuery/archive/master.zip',
			'required'  => true,
		),

		// --- Recommended ---

		// * Advanced Custom Fields Gallery [Add On]
		array(
			'name'      => 'Advanced Custom Fields: Gallery Field',
			'slug'      => 'acf-gallery',
			'source'    => 'https://github.com/AdamEDGECreative/ACFGallery/archive/master.zip',
			'required'  => false,
		),

		// * AIWOPS Security [WordPress.org]
		array(
			'name'      => 'All In One WP Security',
			'slug'      => 'all-in-one-wp-security-and-firewall',
			'required'  => false,
		),

		// * Are you a robot ReCaptcha [WordPress.org]
		array(
			'name'      => 'Are you robot? google recaptcha for wordpress',
			'slug'      => 'are-you-robot-recaptcha',
			'required'  => false,
		),

		// * Disable Emojis [WordPress.org]
		array(
			'name'      => 'Disable Emojis',
			'slug'      => 'disable-emojis',
			'required'  => false,
		),

		// * Duplicate & Merge Posts [WordPress.org]
		array(
			'name'      => 'Duplicate and Merge Posts',
			'slug'      => 'duplicate-and-merge-posts',
			'required'  => false,
		),

		// * Force Regenerate Thumbnails [WordPress.org]
		array(
			'name'      => 'Force Regenerate Thumbnails',
			'slug'      => 'force-regenerate-thumbnails',
			'required'  => false,
		),

		// * Velvet Blues Update URLs [WordPress.org]
		array(
			'name'      => 'Velvet Blues Update URLs',
			'slug'      => 'velvet-blues-update-urls',
			'required'  => false,
		),

		// * WordPress Importer [WordPress.org]
		array(
			'name'      => 'WordPress Importer',
			'slug'      => 'wordpress-importer',
			'required'  => false,
		),

		// * WordPress SEO Yoast [WordPress.org]
		array(
			'name'      => 'Yoast SEO',
			'slug'      => 'wordpress-seo',
			'is_callable' => 'wpseo_init',
			'required'  => false,
		),

		// * WP Defender [WordPress.org]
		array(
			'name'      => 'WP Defender',
			'slug'      => 'defender-security',
			'required'  => false,
		),

		// * WP Smush [WordPress.org]
		array(
			'name'      => 'WP Smush',
			'slug'      => 'wp-smushit',
			'required'  => false,
		),

	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 * TGMPA will start providing localized text strings soon. If you already have translations of our standard
	 * strings available, please help us make TGMPA even better by giving us access to these translations or by
	 * sending in a pull-request with .po file(s) with the translations.
	 *
	 * Only uncomment the strings in the config array if you want to customize the strings.
	 */
	$config = array(
		'id'           => 'edge-template',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'edge-template' ),
			'menu_title'                      => __( 'Install Plugins', 'edge-template' ),
			/* translators: %s: plugin name. * /
			'installing'                      => __( 'Installing Plugin: %s', 'edge-template' ),
			/* translators: %s: plugin name. * /
			'updating'                        => __( 'Updating Plugin: %s', 'edge-template' ),
			'oops'                            => __( 'Something went wrong with the plugin API.', 'edge-template' ),
			'notice_can_install_required'     => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme requires the following plugin: %1$s.',
				'This theme requires the following plugins: %1$s.',
				'edge-template'
			),
			'notice_can_install_recommended'  => _n_noop(
				/* translators: 1: plugin name(s). * /
				'This theme recommends the following plugin: %1$s.',
				'This theme recommends the following plugins: %1$s.',
				'edge-template'
			),
			'notice_ask_to_update'            => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.',
				'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.',
				'edge-template'
			),
			'notice_ask_to_update_maybe'      => _n_noop(
				/* translators: 1: plugin name(s). * /
				'There is an update available for: %1$s.',
				'There are updates available for the following plugins: %1$s.',
				'edge-template'
			),
			'notice_can_activate_required'    => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following required plugin is currently inactive: %1$s.',
				'The following required plugins are currently inactive: %1$s.',
				'edge-template'
			),
			'notice_can_activate_recommended' => _n_noop(
				/* translators: 1: plugin name(s). * /
				'The following recommended plugin is currently inactive: %1$s.',
				'The following recommended plugins are currently inactive: %1$s.',
				'edge-template'
			),
			'install_link'                    => _n_noop(
				'Begin installing plugin',
				'Begin installing plugins',
				'edge-template'
			),
			'update_link' 					  => _n_noop(
				'Begin updating plugin',
				'Begin updating plugins',
				'edge-template'
			),
			'activate_link'                   => _n_noop(
				'Begin activating plugin',
				'Begin activating plugins',
				'edge-template'
			),
			'return'                          => __( 'Return to Required Plugins Installer', 'edge-template' ),
			'plugin_activated'                => __( 'Plugin activated successfully.', 'edge-template' ),
			'activated_successfully'          => __( 'The following plugin was activated successfully:', 'edge-template' ),
			/* translators: 1: plugin name. * /
			'plugin_already_active'           => __( 'No action taken. Plugin %1$s was already active.', 'edge-template' ),
			/* translators: 1: plugin name. * /
			'plugin_needs_higher_version'     => __( 'Plugin not activated. A higher version of %s is needed for this theme. Please update the plugin.', 'edge-template' ),
			/* translators: 1: dashboard link. * /
			'complete'                        => __( 'All plugins installed and activated successfully. %1$s', 'edge-template' ),
			'dismiss'                         => __( 'Dismiss this notice', 'edge-template' ),
			'notice_cannot_install_activate'  => __( 'There are one or more required or recommended plugins to install, update or activate.', 'edge-template' ),
			'contact_admin'                   => __( 'Please contact the administrator of this site for help.', 'edge-template' ),

			'nag_type'                        => '', // Determines admin notice type - can only be one of the typical WP notice classes, such as 'updated', 'update-nag', 'notice-warning', 'notice-info' or 'error'. Some of which may not work as expected in older WP versions.
		),
		*/
	);

	tgmpa( $plugins, $config );
}
