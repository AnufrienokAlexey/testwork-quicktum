<?php

namespace app\Controllers;

class IndexController
{
    public function index(): void
    {
        require_once 'resources/views/index.php';
    }
}
