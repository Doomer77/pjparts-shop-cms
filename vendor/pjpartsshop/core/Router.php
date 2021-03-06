<?php

namespace pjpartsshop;


class Router
{
    protected static $routes = [];
    protected static $route = [];


    public static function add ($regexp, $route = []) {
        self::$routes[$regexp] = $route;
    }

    public static function getRoutes () {
        return self::$routes;
    }

    public static function getRoute () {
        return self::$route;
    }

    public static function dispatch($url) {
        if (self::matchRoute($url)) {
            echo 'OK';
        } else {
            echo 'NO';
        }
    }

    public static function matchRoute ($url) {
        return false;
    }
}