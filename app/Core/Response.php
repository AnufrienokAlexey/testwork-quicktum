<?php

namespace app\Core;

use app\Interfaces\ResponseInterface;
use JetBrains\PhpStorm\NoReturn;

class Response implements ResponseInterface
{
    #[NoReturn] public static function send(
        $data = null,
        $str = null,
        $statusCode = 200
    ): void {
        header_remove();
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");
        echo json_encode([
            'status_code' => $statusCode,
            'data' => $data,
            'str' => $str,
        ]);
        header('Location: /');
        exit();
    }
}