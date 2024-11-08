<?php

namespace App;
class Router {

    private $path;
    private static $routes = []; 

    public function __construct($path)
    {
        $this->path = parse_url($path, PHP_URL_PATH);
    }

    public function match(){
        foreach(self::$routes as $route){
            if($route->getPath() === $this->path){
                return $route;
            }
        }
    }

    public static function addRoute($path, $action){
        self::$routes[] = new Route($path, $action);
    }
}