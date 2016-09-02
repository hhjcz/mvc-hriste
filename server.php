<?php
/** Created by hhj on 9/2/16. */
require_once 'vendor/autoload.php';

$uri = urldecode(
	parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ($uri !== '/' && file_exists(__DIR__ . '/public/' . $uri)) {
	return false;
}

require_once('public/index.php');
