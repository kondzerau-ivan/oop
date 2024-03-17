<?php


namespace PHPFramework;


class Request
{
  public string $uri;

  public function __construct(string $uri)
  {
    $this->uri = trim(urldecode($uri), '/');
  }

  public function getPath(): string
  {
    return $this->uri;
  }

  public function getMethod(): string
  {
    return $_SERVER['REQUEST_METHOD'];
  }
}
