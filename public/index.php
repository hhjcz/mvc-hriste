<?php

require_once '../vendor/autoload.php';

use Hriste\Application;

$app = new Application();

$app->bootstrap()->run();
