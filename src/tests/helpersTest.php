<?php

namespace Hrites\Tests;

use Dotenv\Dotenv;

class helpersTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function env_should_return_default() {
		$value = env('SOME_ENV', 666);
		$this->assertEquals(666, $value);
	}
}
