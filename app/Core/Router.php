<?php

namespace app\Core;

class Router
{
    public static function processRequest(): void
    {
        $uri = Request::getUri();
        $method = Request::getMethod();

        if (array_key_exists($uri, ROUTES)) {
            foreach (ROUTES[$uri] as $route) {
                if ($route[0] == $method) {
                    $controller = $route[1][0];
                    $action = $route[1][1];
                    $controllerFullName = 'app\\Controllers\\' . $controller;
                    $controllerPath = APP . DS . 'Controllers' . DS . $controller . '.php';
                    if (file_exists($controllerPath)) {
                        $c = new $controllerFullName();
                        if (method_exists($c, $action)) {
                            $c->$action();
                        } else {
                            dump('Controller action not found!');
                        }
                    } else {
                        dump('Controller class not found!');
                    }
                } else {
                    self::ErrorPage();
                }
            }
        } else {
            self::ErrorPage();
        }
    }

    public static function ErrorPage(): void
    {
        header('Location: /404');
    }
}