<?php namespace Hriste;

require_once 'helpers.php';

use Dotenv\Dotenv;

/**
 *
 * @author jan.haering@dialtelecom.cz
 */
class Application {

	public function bootstrap() {
		//session_start();
		$this->loadEnvironment();
		return $this;
	}

	public function run() {
		$request = Request::makeFromGlobal();
		$router = new Router();
		$router->route($request);
	}

	private function loadEnvironment() {
		$dotenv = new Dotenv(basepath(), '.env');
		$dotenv->load();
	}

}