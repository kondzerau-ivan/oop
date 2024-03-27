<?php

use PHPFramework\Application;

if (PHP_MAJOR_VERSION < 8) {
  die('Requere PHP version >= 8');
}

require_once __DIR__ . '/../config/init.php';
require_once ROOT . '/vendor/autoload.php';

$app = new \PHPFramework\Application();

require_once HELPERS . '/helpers.php';
require_once CONFIG . '/routes.php';

$app->run();
