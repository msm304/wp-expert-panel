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
        var_dump($this->dispatch_uri($request_uri));
    }

    private function parse_uri($uri)
    {
        $parse_uri = explode('/', $uri);
        return end($parse_uri);
    }

    private function dispatch_uri($request_uri)
    {
        $controller = $this->parse_uri($request_uri);
        $controller_name = $this->format_controller_file($controller);
        return $this->get_controller_file($controller_name);
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
}

new Router();
