<?php

return [
    '/' => [
        ['GET', ['IndexController', 'index']],
    ],
    '/404' => [
        ['GET', ['NotFoundController', 'index']],
    ],
    '/form' => [
        ['POST', ['FormController', 'isValid']],
    ],
];
