<?php
/**
 * @author JKetelaar
 */

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * @param $args
 * @param $assoc_args
 *
 * @when before_wp_load
 */
$sync_command = function ( $args, $assoc_args ) {

};

WP_CLI::add_command( 'sync', $sync_command, [
	'shortdesc' => 'Synchronizes environments within a server',
	'synopsis'  => [
		[
			'type'     => 'positional',
			'name'     => 'environment',
			'optional' => false,
			'multiple' => false
		],
		//        [
		//            'type' => 'assoc',
		//
		//        ]
	]
] );