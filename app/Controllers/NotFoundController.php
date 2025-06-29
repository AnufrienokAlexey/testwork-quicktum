<?php

namespace app\Controllers;

class NotFoundController
{

    public function index(): void
    {
        header('Location: /404');
    }
}