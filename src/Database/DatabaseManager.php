<?php

namespace Hriste\Database;

class DatabaseManager {

	protected $config;

	/**
	 * DatabaseManager constructor.
	 */
	public function __construct() {
		$this->config = require configfile('database.php');
	}

	public function getConnection($name = 'default') {
		$config = $this->config['connections'][$name];
		$connection = new Connection($config);
		return $connection;
	}
}