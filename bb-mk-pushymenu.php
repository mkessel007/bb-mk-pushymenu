<?php
/**
 * Plugin Name: Pushy Menu Module
 * Plugin URI: http://www.mjkessel.me
 * Description: Pushy Custom Module
 * Version: 0.1.0
 * Author: Michael Kessel
 * Author URI: http://www.mjkessel.me
 */
define('PUSHY_MENU_DIR', plugin_dir_path(__FILE__));
define('PUSHY_MENU_URL', plugins_url('/', __FILE__));

/**
 * Custom modules
 */
function pushy_menu_module() {
	if (class_exists('FLBuilder')) {
		require_once 'includes/pushy-menu-module.php';
	}
}
add_action('init', 'pushy_menu_module');
