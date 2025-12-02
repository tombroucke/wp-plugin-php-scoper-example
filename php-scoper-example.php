<?php

use Otomaties\PhpScoperExample\Plugin;

/*
 * Plugin Name: PHP Scoper Example
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Load the Composer autoloader
$prefixedAutoloadPath = __DIR__.'/vendor_prefixed/autoload.php';
if (file_exists($prefixedAutoloadPath)) {
    require_once $prefixedAutoloadPath;
}

/**
 * Get main plugin class instance
 */
function scoperExample(): Plugin
{
    /** @var Plugin|null $plugin */
    static $plugin;

    if (! $plugin) {
        $plugin = new Plugin;
    }

    return $plugin;
}

add_action('plugins_loaded', function () {
    scoperExample();
});

add_action('init', function () {
    scoperExample()
        ->dumpCollection(['apple', 'banana', 'cherry'])
        ->log('This is an emergency log message!');
});
