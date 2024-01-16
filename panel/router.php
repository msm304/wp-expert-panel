<?php

class Router
{
    public function __construct()
    {
        add_action('init', [$this, 'routes_handler']);
    }

    public function routes_handler()
    {
        $request_uri = $_SERVER['REQUEST_URI'];
        $this->dispatch_uri($request_uri);
    }

    private function parse_uri($uri)
    {
        $parse_uri = explode('/', strtok($uri, '?'));
        return end($parse_uri);
    }

    private function dispatch_uri($request_uri)
    {
        if (strpos($request_uri, 'panel') === false) {
            return;
        }
        $controller = $this->parse_uri($request_uri);
        $controller_name = $this->format_controller_file($controller);
        // return $this->get_controller_file($controller_name);
        // return $this->is_valid_controller($controller_name);
        if ($this->is_valid_controller($controller_name)) {
            $controller_patch = $this->get_controller_file($controller_name);
            require_once $controller_patch;
            $controllerInstance = new $controller_name;
            $controllerInstance->index();
            exit;
        } else {
            die('کنترلر مورد نظر شما نامعتبر می باشد.');
            // throw new Exception('کنترلر مورد نظر شما نامعتبر می باشد.');
        }
    }

    private function format_controller_file($controller)
    {
        $formatted_controller = ucfirst($controller) . 'Controller';
        return $formatted_controller;
    }

    private function get_controller_file($controller_name)
    {
        return WEP_PLUGIN_DIR . 'panel/Controller/' . $controller_name . '.php';
    }

    private function is_valid_controller($controller_name)
    {
        $controller_file_path = $this->get_controller_file($controller_name);
        return file_exists($controller_file_path) && is_readable($controller_file_path);
    }
}

new Router();
