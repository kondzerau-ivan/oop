<?php


namespace PHPFramework;


class Router
{
    public Request $request;
    public Response $response;
    protected array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function get($path, $callback): void
    {
        $path = trim($path, '/');
        $this->routes['GET']["/{$path}"] = $callback;
    }

    public function post($path, $callback): void
    {
        $this->routes['POST'][$path] = $callback;
    }

    public function dispatch(): mixed
    {
      $path = $this->request->getPath();
      $method = $this->request->getMethod();
      $callback = $this->routes[$method]["/{$path}"] ?? false;
      
      if(!$callback) {
        $this->response->setResponseCode(404);
        return "Page not found!";
      }
      return call_user_func($callback);
    }
}