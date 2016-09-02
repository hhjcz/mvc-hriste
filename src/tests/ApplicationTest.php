<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/2/16
 * Time: 12:08 PM
 */

namespace Hriste\Tests;

use Hriste\Application;

class ApplicationTest extends \PHPUnit_Framework_TestCase {

	public function setUp() {
		@session_start();
	}

	/**
	 * @test
	 */
	public function should_run_test() {
		$this->assertEquals(66, 66);
	}

	/**
	 * @test
	 */
	public function autoloads_application() {
		$app = new Application();
		$this->assertInstanceOf(Application::class, $app);
		$app->bootstrap();
	}

}
