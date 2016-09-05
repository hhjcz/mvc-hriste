<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/2/16
 * Time: 2:30 PM
 */

namespace Hriste\Request;

class Request {
	const GET = 'GET';
	const POST = 'POST';
	const PUT = 'PUT';
	const PATCH = 'PATCH';
	const DELETE = 'DELETE';

	protected $method;
	protected $path;
	protected $input;

	/**
	 * Request constructor.
	 * @param $method
	 * @param $path
	 * @param $input
	 */
	public function __construct($method = self::GET, $path = '/', $input = []) {
		$this->method = $method;
		$this->path = $path;
		$this->input = $input;
	}

	/**
	 * @return mixed
	 */
	public function getMethod() {
		return $this->method;
	}

	/**
	 * @return mixed
	 */
	public function getPath() {
		return $this->path;
	}

	/**
	 * @return mixed
	 */
	public function getInput() {
		return $this->input;
	}

}