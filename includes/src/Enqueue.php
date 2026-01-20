<?php
namespace GrootMade\Connector;

class Enqueue
{
	private static $instance = null;

	public function __construct() {}

	public static function get_instance()
	{
		if (is_null(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}
}
