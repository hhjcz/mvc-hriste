<?php
return [
	'connections' => [
		'default' => [
			'driver'   => env('DB_DRIVER', 'mysql'),
			'host'     => env('DB_HOST', 'localhost'),
			'database' => env('DB_DATABASE', 'test'),
			'charset'  => env('DB_CHARSET', 'utf8mb4'),
			'username' => env('DB_USERNAME', ''),
			'password' => env('DB_PASSWORD', ''),
		]
	]
];
