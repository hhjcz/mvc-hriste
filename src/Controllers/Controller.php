<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/2/16
 * Time: 4:08 PM
 */

namespace Hriste\Controllers;

use Hriste\Request\Request;

class Controller {

	public function index(Request $request) {
		header('My-custom: 666');
		dump($_GET);
		dump($_SERVER);
		dump($request);
		phpinfo();
	}
}