<?php namespace Hriste\Request;

class GlobalParser implements RequestParser {

	protected $server;
	protected $get;
	protected $post;

	/**
	 * GlobalParser constructor.
	 * @param $server
	 * @param $get
	 * @param $post
	 */
	public function __construct($server = null, $get = null, $post = null) {
		$this->server = $server ?: $_SERVER;
		$this->get = $get ?: $_GET;
		$this->post = $post ?: $_POST;
	}

	/**
	 * @inheritdoc
	 */
	public function parse() {
		$method = $this->parseMethod($this->server, Request::GET);
		$path = $this->parseUrl($this->server, '/');
		$input = array_merge($this->get, $this->post);

		$request = new Request($method, $path, $input);

		return $request;
	}

	/**
	 * @param $from
	 * @param $default
	 * @return array
	 */
	private function parseUrl($from, $default) {
		$path = isset($from['REQUEST_URI'])
			? urldecode(parse_url($from['REQUEST_URI'], PHP_URL_PATH))
			: $default;
		return $path;
	}

	/**
	 * @param $from
	 * @param $default
	 * @return string
	 */
	private
	function parseMethod($from, $default) {
		$method = ! empty($from['REQUEST_METHOD']) ? $from['REQUEST_METHOD'] : $default;
		return $method;
	}
}