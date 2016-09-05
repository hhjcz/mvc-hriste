<?php

if ( ! function_exists('basepath')) {
	function basepath() {
		return realpath(dirname(__DIR__));
	}
}

if ( ! function_exists('configpath')) {
	function configpath() {
		return basepath() . '/config';
	}
}

if ( ! function_exists('configfile')) {
	function configfile($name) {
		return configpath() . "/$name";
	}
}

if ( ! function_exists('env')) {
	function env($key, $default = null) {
		return getenv($key) ?: $default;
	}
}
