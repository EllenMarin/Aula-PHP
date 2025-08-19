<?php namespace Flag\Core;

use ReflectionClass;

class Application {

    private array $routes = [];

    public function start() {
        session_start();
        $this->handleRequest();
    }

    public function addRoute(string $path, callable | array $callback): void {
        $this->routes[$path] = $callback;
    }

    private function handleRequest(): void {
        $path = $_SERVER['PATH_INFO'] ?? '/';
        
        if (!array_key_exists($path, $this->routes)) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        $callback = $this->routes[$path];

        if (is_array($callback)) {
            // $controllerName = $callback[0];
            // $actionName = $callback[1];

            // $controller = new $controllerName();
            // $controller->$actionName();

            $reflector = new ReflectionClass($callback[0]);
            
            if (!$reflector->isInstantiable()) {
                http_response_code(500);
                echo "500 Internal Server Error: Controller is not instantiable";
                return;
            }

            $instance = $reflector->newInstance();
            $method = $reflector->getMethod($callback[1]);

            $method->invoke($instance);

            return;
        }

        if (is_callable($callback)) {
            call_user_func($callback);
            return;
        }
        
        http_response_code(500);
        echo "500 Internal Server Error: Route callback is not callable";
    }
}