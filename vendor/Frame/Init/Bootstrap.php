<?php 

namespace Frame\Init;

abstract class Bootstrap {

    private $routes;

    abstract protected function initRoutes();

    public function __construct() {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    protected function run($url) {
        foreach ($this->getRoutes() as $key => $route) {
            if($url == $route['route']) {
                $class = "App\\Controllers\\".ucfirst($route['controller']);
                
                $controller = new $class;
                $action = $route['action'];
                $controller->$action();
            }
        }
    }

    protected function getUrl() {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    /**
     * Get the value of routes
     */ 
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Set the value of routes
     * 
     */ 
    public function setRoutes(array $routes)
    {
        $this->routes = $routes;

        return $this;
    }

}