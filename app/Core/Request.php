<?php

namespace app\Core;

class Request
{
    public static function getUri(): string
    {
        $uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $uri = '/' . trim($uri, '/');
        return trim($uri);
    }

    public static function getMethod(): string
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function getEntityBody(): array|null
    {
        return json_decode(file_get_contents('php://input'), true);
    }
}
