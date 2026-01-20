<?php
/*
 * Plugin Name: GrootMade Connector
 * Plugin URI: https://grootmade.com
 * Description: Unlock unlimited themes and plugins with GrootMade — install, update, and manage in one place.
 * Version: 6.0.1768907675
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
