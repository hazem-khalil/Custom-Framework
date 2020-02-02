<?php

class Router
{
    protected $routes = [];

    public function define(array $routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        throw new Exception('The URI you entered not found.');
    }

}