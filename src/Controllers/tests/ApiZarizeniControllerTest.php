<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/2/16
 * Time: 3:48 PM
 */

namespace Hriste\Controllers\Tests;

use Hriste\Controllers\ApiZarizeniController;

class ApiZarizeniControllerTest extends \PHPUnit_Framework_TestCase {

	/**
	 * @var ApiZarizeniController;
	 */
	protected $object;

	public function setUp() {
		$this->object = new ApiZarizeniController();
	}

	/**
	 * @test
	 */
	public function should_instantiate() {
		$this->assertInstanceOf(ApiZarizeniController::class, $this->object);
	}
}
