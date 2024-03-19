<?php

/** @var \PHPFramework\Application $app */

use App\Controllers\ContactController;

$app->router->get('/', function () {
  return 'Home page';
});

$app->router->get('/about', function () {
  return 'About page';
});

$app->router->get('/contact', [\App\Controllers\ContactController::class, 'index']);

$app->router->post('/contact', [\App\Controllers\ContactController::class, 'send']);