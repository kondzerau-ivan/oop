<?php

/** @var \PHPFramework\Application $app */

$app->router->get('/', function () {
  return 'Home page';
});

$app->router->get('/about', function () {
  return 'About page';
});

$app->router->get('/contact', function () {
  return 'Contact form page';
});

$app->router->post('/contact', function () {
  return 'Contact form POST page';
});