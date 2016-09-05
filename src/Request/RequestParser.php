<?php
/**
 * Created by PhpStorm.
 * User: hhj
 * Date: 9/5/16
 * Time: 11:47 AM
 */

namespace Hriste\Request;

use Hriste\Request;

interface RequestParser {

	/**
	 * @return Request
	 */
	public function parse();
}