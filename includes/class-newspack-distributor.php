<?php
/**
 * Main class for the Newspack Distributor plugin.
 *
 * @package Newspack_Distributor
 */

/**
 * Init plugin functionality.
 */
class Newspack_Distributor {
	/**
	 * Constructor.
	 */
	public function __construct() {
		add_filter( 'dt_syncable_taxonomies', [ $this, 'sync_taxonomies' ] );
	}

	/**
	 * Define taxonomies to be synced by Distributor.
	 *
	 * @param array   $taxonomies Associative array list of taxonomies supported by current post in the format of $taxonomy => $terms.
	 *
	 * @return array Associative array list of taxonomies supported by current post in the format of $taxonomy => $terms.
	 */
	public function sync_taxonomies( $taxonomies ) {
		// Taxonomies we don't want to sync.
		$blacklisted_taxonomies = [
			'category',
			'post_tag',
		];

		$filtered_taxonomies = array_filter(
			$taxonomies,
			function( $taxonomy ) use ( $blacklisted_taxonomies ) {
				return ! in_array( $taxonomy, $blacklisted_taxonomies );
			}
		);

		return array_values( $filtered_taxonomies );
	}
}

new Newspack_Distributor();
