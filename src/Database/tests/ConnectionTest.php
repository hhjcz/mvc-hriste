<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/5/16
 * Time: 2:32 PM
 */

namespace Hriste\Database\Tests;

use Dotenv\Dotenv;
use Hriste\Database\Connection;

class ConnectionTest extends \PHPUnit_Framework_TestCase {

	protected $fakeConfig;

	public function setUp() {
		$dotenv = new Dotenv(basepath());
		$dotenv->load();
		$this->fakeConfig = [
			'driver'   => env('DB_DRIVER', 'mysql'),
			'host'     => env('DB_HOST', 'localhost'),
			'database' => env('DB_DATABASE', 'test'),
			'charset'  => env('DB_CHARSET', 'utf8mb4'),
			'username' => env('DB_USERNAME', ''),
			'password' => env('DB_PASSWORD', ''),
		];
	}

	/**
	 * @test
	 */
	public function should_instantiate() {
		$db = new Connection($this->fakeConfig);
		$this->assertInstanceOf(Connection::class, $db);
	}
}
