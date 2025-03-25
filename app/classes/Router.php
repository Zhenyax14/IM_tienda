<?php

namespace App\classes;

use Exception;
use ReflectionClass;
use ReflectionException;

class Router
{
    private array $routes;
    private string $action;
    private array $params = [];
    private string $controller;

    /**
     * @throws Exception
     */
    public function __construct()
    {
        $this->routes = include(routes());

        // Normalize the URI (remove trailing slash) and get the request method
        $requestUri = rtrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/') ?: '/';
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        // Validate route existence
        if (isset($this->routes[$requestMethod][$requestUri])) {
            [$this->controller, $this->action] = $this->routes[$requestMethod][$requestUri];
        } else {
            // If no matching route, use 404 handler
            if (isset($this->routes['404'])) {
                [$this->controller, $this->action] = $this->routes['404'];
            } else {
                throw new Exception("Error: Route not found for $requestMethod $requestUri", 404);
            }
        }
    }

    /**
     * Handle the request and invoke the appropriate controller method
     *
     * @throws ReflectionException
     * @throws Exception
     */
    public function processRequest()
    {
        if (!class_exists($this->controller)) {
            throw new Exception("Error: Controller '{$this->controller}' not found", 404);
        }

        $ref = new ReflectionClass($this->controller);

        if (!$ref->hasMethod($this->action)) {
            throw new Exception("Error: Method '{$this->action}' not found in '{$this->controller}'", 404);
        }

        if (!$ref->isInstantiable()) {
            throw new Exception("Error: Cannot instantiate controller '{$this->controller}'", 500);
        }

        // Create an instance of the controller
        $instance = $ref->newInstance();
        $method = $ref->getMethod($this->action);

        // Capture and sanitize input (JSON body and GET parameters)
        $this->captureInput();

        // Invoke the controller method with parameters
        return $method->invoke($instance, $this->params);
    }

    /**
     * Capture and sanitize input from JSON body and GET parameters
     */
    private function captureInput(): void
    {
        // Capture JSON input (php://input)
        $input = file_get_contents('php://input');
        if (!empty($input)) {
            foreach (json_decode($input, true) ?? [] as $index => $item) {
                $this->params['POST'][$index] = htmlspecialchars($item);
            }
        }

        // Capture GET parameters
        if (!empty($_GET)) {
            foreach ($_GET as $index => $item) {
                $this->params['GET'][$index] = htmlspecialchars($item);
            }
        }

        // Capture POST parameters
        if (!empty($_POST)) {
            foreach ($_POST as $index => $item) {
                $this->params['POST'][$index] = htmlspecialchars($item);
            }
        }
    }
}
