<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/2/16
 * Time: 2:30 PM
 */

namespace Hriste;

class Request {

	public $path;
	public $query;
	public $method;
	public $input;

	/**
	 * @return Request
	 */
	public static function makeFromGlobal() {
		$request = new static;
		$request->parseUrl();
		$request->method = ! empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
		$request->input = array_merge($_GET, $_POST);

		return $request;
	}

	private function parseUrl() {
		if ( ! empty($_SERVER['REQUEST_URI'])) {
			$parsedUrl = parse_url($_SERVER['REQUEST_URI']);
			$this->path = urldecode($parsedUrl['path']);
			$this->query = urldecode($parsedUrl['query']);
		}
	}

}