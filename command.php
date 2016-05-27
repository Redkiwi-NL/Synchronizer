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
    define('CONFIG_FILE', ABSPATH . 'wp-cli-sync.yml');
};

WP_CLI::add_command( 'sync', $sync_command, [
    'shortdesc' => 'Synchronizes environments within a server',
    'synopsis'  => [
        [
            'type'     => 'positional',
            'name'     => 'from',
            'optional' => false,
            'multiple' => false
        ],
        [
            'type'     => 'positional',
            'name'     => 'to',
            'optional' => false,
            'multiple' => false
        ]
    ]
] );