<?php

namespace PHPFramework;

class View
{
  public string $layout;
  public string $content = '';

  public function __construct($layout)
  {
    $this->layout = $layout;
  }

  public function render($view, $data = [], $layout = ''): string
  {
    extract($data);
    $view_file = VIEWS . "/{$view}.php";
    if(is_file($view_file)) {
      ob_start();
      require_once $view_file;
      return ob_get_clean();
    } else {
      app()->response->setResponseCode(500);
      return view('errors/500');
    }
  }
}