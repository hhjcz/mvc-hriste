<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/5/16
 * Time: 3:21 PM
 */

namespace Hriste\Database\Tests;

use Hriste\Database\Connection;
use Hriste\Database\DatabaseManager;

class DatabaseManagerTest extends \PHPUnit_Framework_TestCase {

	/** @var DatabaseManager */
	protected $object;

	public function setUp() {
		$this->object = new DatabaseManager();
	}

	/**
	 * @test
	 */
	public function should_process_config() {
		$this->assertInstanceOf(DatabaseManager::class, $this->object);
	}

	/**
	 * @test
	 */
	public function should_return_default_connection() {
		$connection = $this->object->getConnection();
		$this->assertInstanceOf(Connection::class, $connection);
	}

}
