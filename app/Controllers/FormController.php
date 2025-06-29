<?php

namespace app\Controllers;

use app\Core\Response;

class FormController
{
    public function isValid(): void
    {
        if (isset($_POST['str'])) {
            $arr = str_split($_POST['str']);
            $isValid = $this->isCorrect($arr);
            $_SESSION['result'] = $isValid;
            $_SESSION['str'] = $_POST['str'];
            if ($isValid) {
                Response::send('The code is correct!', $_POST['str']);
            } else {
                Response::send('The code is incorrect!', $_POST['str']);
            }
        }
    }

    private function isCorrect($arr): bool
    {
        foreach ($arr as $key => $value) {
            if ($value !== '{' && $value !== '}') {
                unset($arr[$key]);
            }
        }

        if (empty($arr)) {
            return false;
        }

        $a = 0;
        foreach ($arr as $value) {
            if ($value === '{') {
                $a++;
            };
            if ($value === '}') {
                $a--;
            };
            if (($a < 0)) {
                return false;
            }
        }
        if ($a > 0) {
            return false;
        }
        return true;
    }
}
