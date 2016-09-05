<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/5/16
 * Time: 2:32 PM
 */

namespace Hriste\Database\Tests;

use Hriste\Database\Connection;

class ConnectionTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function should_instantiate() {
		$db = new Connection();
		$this->assertInstanceOf(Connection::class, $db);
	}
}
