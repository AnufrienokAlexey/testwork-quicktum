<?php

namespace app\Controllers;

class NotFoundController
{
    public function index(): void
    {
        require_once 'resources/views/404.php';
    }
}
