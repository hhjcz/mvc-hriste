<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/2/16
 * Time: 12:46 PM
 */

namespace Hriste;

use Hriste\Controllers\Controller;

class Router {

	protected $controllersNamespace = 'Hriste\\Controllers\\';
	protected $defaultController = Controller::class;

	public function route(Request $request) {
		$controller = $this->getControllerFor($request);

		return $controller->index($request);
	}

	public function getControllerFor(Request $request) {
		$controllerClass = $this->controllersNamespace . $this->getControllerClass($request->path);
		if (class_exists($controllerClass)) {
			return new $controllerClass();
		} else {
			return new $this->defaultController;
		}
	}

	private function getControllerClass($path) {
		$snakeCase = str_replace('/', ' ', trim($path, '/'));
		$camelCase = str_replace(' ', '', ucwords($snakeCase));

		return $camelCase . 'Controller';
	}
}