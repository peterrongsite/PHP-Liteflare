<?php
namespace System\Core;

class Router {
    protected $routes = [];

    public function add($method, $path, $callback) {
        $this->routes[] = compact('method', 'path', 'callback');
    }

    public function dispatch($method, $uri) {
        foreach ($this->routes as $route) {
            if ($route['method'] === $method && $route['path'] === $uri) {
                $controller = new $route['callback'][0];  // Create an instance of the controller
                $method = $route['callback'][1];           // Get the method name
                return call_user_func([$controller, $method]);  // Call the method on the instance
            }
        }
        echo '404 Not Found!';
    }
}
