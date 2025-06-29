<?php

namespace app\Core;

class Request
{
    public static ?string $configRoute = null;

    public static function getUri(): string
    {
        $uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $uri = '/' . trim($uri, '/');
        return trim($uri);
    }

    public static function getRoute(): array
    {
        return explode('/', self::getUri());
    }

    public static function getConfigRoute(): void
    {
        $uriArray = self::getRoute();
        dump($uriArray);
        self::$configRoute = implode('/', $uriArray);
    }

    public static function getEntityBody(): array|null
    {
        return json_decode(file_get_contents('php://input'), true);
    }

    public static function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
