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

	/**
	 * @var Application
	 */
	protected $app;

	public function setUp() {
		@session_start();
		$this->app = new Application();
		$this->app->bootstrap();
	}

	/**
	 * @test
	 */
	public function should_instantiate() {
		$this->assertInstanceOf(Application::class, $this->app);
	}

	/**
	 * @test
	 */
	public function should_load_environment() {
		$this->assertNotEmpty(getenv('DB_HOST'));
	}

}
