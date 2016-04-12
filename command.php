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
 */
$sync_command = function ( $args, $assoc_args ) {

};

WP_CLI::add_command( 'sync', $sync_command, [
	'shortdesc' => 'Synchronizes environments within a server',
	'synopsis'  => [
		[
			'type'     => 'positional',
			'name'     => 'env',
			'optional' => false,
			'multiple' => false
		]
	]
] );