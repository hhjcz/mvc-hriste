<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/5/16
 * Time: 12:22 PM
 */

namespace Hriste\Request\Tests;

use Hriste\Request\GlobalParser;
use Hriste\Request\Request;
use Hriste\Request\RequestParser;

class GlobalParserTest extends \PHPUnit_Framework_TestCase {

	/** @var RequestParser */
	private $object;

	protected function setUp() {
		parent::setUp();
	}

	/**
	 * @test
	 */
	public function should_instantiate() {
		$this->object = new GlobalParser();
		$this->assertInstanceOf(RequestParser::class, $this->object);
	}

	/**
	 * @test
	 */
	public function should_return_request_with_defaults() {
		$this->object = new GlobalParser();
		/** @var Request $request */
		$request = $this->object->parse();
		$this->assertInstanceOf(Request::class, $request);
		$this->assertEquals('/', $request->getPath());
		$this->assertEquals(Request::GET, $request->getMethod());
		$this->assertEquals([], $request->getInput());
	}

	/**
	 * @test
	 */
	public function should_return_filled_request() {
		$fakeServer = ['REQUEST_URI' => '/stairway/to/heaven?eyes=blue', 'REQUEST_METHOD' => 'DELETE'];
		$fakeGet = ['eyes' => 'blue'];
		$fakePost = ['hair' => 'black'];
		$this->object = new GlobalParser($fakeServer, $fakeGet, $fakePost);

		/** @var Request $request */
		$request = $this->object->parse();
		$this->assertInstanceOf(Request::class, $request);
		$this->assertEquals('/stairway/to/heaven', $request->getPath());
		$this->assertEquals('DELETE', $request->getMethod());
		$this->assertEquals(['eyes' => 'blue', 'hair' => 'black'], $request->getInput());
	}

}
