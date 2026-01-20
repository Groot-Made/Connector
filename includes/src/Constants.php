<?php

namespace GrootMade\\Connector;

class Constants
{
	const SLUG = 'grootmade-connector';
	const NAME = 'GrootMade Connector';
	const DESCRIPTION = 'Unlock unlimited themes and plugins with GrootMade — install, update, and manage in one place.';
	const VERSION = '1.0.{TS}';
	const URI = 'https://grootmade.com';
	const TEXTDOMAIN = 'grootmade-connector';
	const MIN_WP = '6.0';
	const TESTED_WP = '6.7.2';
	const MIN_PHP = '7.4';
	const AUTHOR_NAME = 'GrootMade';
	const AUTHOR_URL = 'https://grootmade.com';
	const LICENSE = 'GPLv2 or later';
	const LICENSE_URL = 'https://www.gnu.org/licenses/gpl-2.0.html';
	const UPDATE_URL = 'https://grootmade.com';
	const DOMAIN_PATH = '/languages/';

	// WP Stuffs
	const PLUGIN_DOWNLOAD_URL = 'https://github.com/Groot-Made/Connector/releases/download/latest-stable/grootmade-connector.zip';
	const PLUGIN_INFO_URL = 'https://raw.githubusercontent.com/Groot-Made/Connector/stable/info.json';
	const ADMIN_MENU_TITLE = 'GrootMade Connector';
	const ACTIVATION_KEY = 'grootmade_connector_activation';
	const ADMIN_PAGE_ID = 'grootmade-connector';
	const ADMIN_PAGE_TITLE = 'GrootMade Connector';
	const SETTING_KEY = 'grootmade_connector_settings';
	const BANNER_URL_HIGH = 'https://raw.githubusercontent.com/Groot-Made/assets/refs/heads/main/banner.jpg';
	const BANNER_URL_LOW = 'https://raw.githubusercontent.com/Groot-Made/assets/refs/heads/main/banner-low.jpg';
	const ICON_URL = 'https://raw.githubusercontent.com/Groot-Made/assets/refs/heads/main/icon.png';
	const LOGO_LIGHT = 'https://raw.githubusercontent.com/Groot-Made/assets/refs/heads/main/logo-light.png';
	const LOGO_DARK = 'https://raw.githubusercontent.com/Groot-Made/assets/refs/heads/main/logo-dark.png';
	const WHITELABEL = 0;

	// Engine Details
	const ENGINE_URL = 'https://api.grootmade.com';
	const MAIN_SITE = 'https://grootmade.com';

	// Typesense Setting
	const TYPESENSE_SEARCH_KEY = '24ZxPB9jCmvCV7KwAUAVphZp7xYIjlaN';
	const TYPESENSE_HOST = 'search.grootmade.com';
	const TYPESENSE_PORT = 443;
	const TYPESENSE_PATH = '';
	const TYPESENSE_PROTOCOL = 'https';

	// Additional constants
	const AUTOUPDATE_SETTING_KEY = 'grootmade_connector_autoupdate';
	const DEFAULT_SETTINGS = [];
}
