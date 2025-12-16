<?php
/**
 * Plugin Name:       Hero Banner Block
 * Plugin URI:        https://github.com/vasantrajput/hero-banner-block
 * Description:       A Gutenberg block for a Hero Banner with slider options and background video support.
 * Version:           1.0.4
 * Author:            VasantRajput
 * Author URI:        https://profiles.wordpress.org/vasantrajput/
 * Text Domain:       hero-banner-block
 * License:           GPL-2.0+
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it also registers all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function hero_banner_block_init()
{
    // Register the Slider (Parent) Block
    register_block_type(__DIR__ . '/build');

    // Register the Slide (Child) Block
    register_block_type(__DIR__ . '/build/slide');
}
add_action('init', 'hero_banner_block_init');
