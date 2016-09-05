<?php namespace Hriste;

require_once 'helpers.php';

use Dotenv\Dotenv;
use Hriste\Request\GlobalParser;
use Hriste\Request\RequestParser;

/**
 *
 * @author jan.haering@dialtelecom.cz
 */
class Application {

	/** @var RequestParser */
	private $requestParser;

	public function bootstrap() {
		//session_start();
		$this->loadEnvironment();
		if (PHP_SAPI === 'cli') {
			$this->requestParser = new GlobalParser();
		} else {
			$this->requestParser = new GlobalParser();
		}
		return $this;
	}

	public function run() {
		$router = new Router();
		$request = $this->requestParser->parse();
		$router->route($request);
	}

	private function loadEnvironment() {
		$dotenv = new Dotenv(basepath(), '.env');
		$dotenv->load();
	}

}