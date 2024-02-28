<?php
/**
 * Plugin Name:       WPForms Post Submissions
 * Plugin URI:        https://wpforms.com
 * Description:       Post Submissions with WPForms.
 * Requires at least: 4.9
 * Requires PHP:      5.5
 * Author:            WPForms
 * Author URI:        https://wpforms.com
 * Version:           1.4.1
 * Text Domain:       wpforms-post-submissions
 * Domain Path:       languages
 *
 * WPForms is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * WPForms is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with WPForms. If not, see <https://www.gnu.org/licenses/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin version.
 *
 * @since 1.0.0
 */
define( 'WPFORMS_POST_SUBMISSIONS_VERSION', '1.4.1' );

/**
 * Load the main class.
 *
 * @since 1.0.0
 */
function wpforms_post_submissions() {

	// WPForms Pro is required.
	if (
		! function_exists( 'wpforms' ) ||
		! function_exists( 'wpforms_get_license_type' ) ||
		! in_array( wpforms_get_license_type(), [ 'pro', 'elite', 'agency', 'ultimate' ], true ) ||
		version_compare( wpforms()->version, '1.7.5', '<' )
	) {
		return;
	}

	require_once plugin_dir_path( __FILE__ ) . 'class-post-submissions.php';
}

add_action( 'wpforms_loaded', 'wpforms_post_submissions' );

/**
 * Load the plugin updater.
 *
 * @since 1.0.0
 *
 * @param string $key License key.
 */
function wpforms_post_submissions_updater( $key ) {

	new WPForms_Updater(
		[
			'plugin_name' => 'WPForms Post Submissions',
			'plugin_slug' => 'wpforms-post-submissions',
			'plugin_path' => plugin_basename( __FILE__ ),
			'plugin_url'  => trailingslashit( plugin_dir_url( __FILE__ ) ),
			'remote_url'  => WPFORMS_UPDATER_API,
			'version'     => WPFORMS_POST_SUBMISSIONS_VERSION,
			'key'         => $key,
		]
	);
}

add_action( 'wpforms_updater', 'wpforms_post_submissions_updater' );
