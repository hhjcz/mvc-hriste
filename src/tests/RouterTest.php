<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/2/16
 * Time: 12:46 PM
 */

namespace Hriste\Tests;

use Hriste\Router;

class RouterTest extends \PHPUnit_Framework_TestCase {

	protected $object;

	public function setUp() {
		parent::setUp();
		$this->object = new Router();
	}

	/**
	 * @test
	 */
	public function should_instantiate() {
		$this->assertInstanceOf(Router::class, $this->object);
	}

}
