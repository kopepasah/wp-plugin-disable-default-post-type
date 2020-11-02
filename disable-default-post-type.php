<?php
/**
 * Disable Default Post Type
 *
 * @package DDPT
 * @author  Justin Kopepasah
 * @license MPL-2.0
 *
 * Plugin Name:       Disable Default Post Type
 * Plugin URI:        https://github.com/kopepasah/wp-plugin-disable-default-post-type
 * Description:       Disable the default (Posts) post type.
 * Version:           0.2.0
 * Requires PHP:      5.3
 * Requires at least: 4.4
 * Author:            Justin Kopepasah
 * Author URI:        https://kopepasah.com
 * Text Domain:       disable-default-post-type
 * License:           MPL-2.0
 * License URI:       https://www.mozilla.org/en-US/MPL/2.0/
 */

// Hook into the post type registration arguments filter.
add_filter(
	'register_post_type_args',
	/**
	 * Filter the public argument for the default post type.
	 *
	 * @param array  $args Array of arguments for registering a post type.
	 * @param string $type Post type key.
	 *
	 * @return array Filtered post type arguments.
	 */
	function( $args, $type ) {
		if ( 'post' === $type ) {
			$args['public'] = false;
		}

		return $args;
	},
	999, // Very, very late.
	2
);
