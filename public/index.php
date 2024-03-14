<?php

if (PHP_MAJOR_VERSION < 8) {
  die('Requere PHP version >= 8');
}

require_once __DIR__ . '/../config/init.php';
require_once ROOT . '/vendor/autoload.php';

new PHPFramework\Test();
new App\Controllers\Test();
