<?php

namespace app\Controllers;

class FormController
{
    public string $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function isValid(): void
    {
        ;
        if (isset($_POST['str'])) {
            echo($_POST['str']);
        }
    }
}