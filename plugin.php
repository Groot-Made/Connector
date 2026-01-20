<?php
/*
 * Plugin Name: GrootMade Connector
 * Plugin URI: https://grootmade.com
 * Description: GrootMade Connector plugin for WordPress.
 * Version: 1.0.1768919098
 * Requires at Least: 6.0
 * Requires PHP: 7.4
 * Author: GrootMade
 * Author URI: https://grootmade.com
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: grootmade-connector
 **/
namespace GrootMade\Connector {
	if (file_exists(__DIR__ . '/includes/lib/autoload.php')) {
		require_once __DIR__ . '/includes/lib/autoload.php';
		Plugin::get_instance(__FILE__);
		Upgrade::get_instance(__FILE__);
	}
}
