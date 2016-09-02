<?php

if ( ! function_exists('basepath')) {
	function basepath() {
		return realpath(dirname(__DIR__));
	}
}
