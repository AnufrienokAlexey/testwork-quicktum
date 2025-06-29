<?php

return [
    '/form' => [
        ['POST', ['FormController', 'isValid']],
    ],
    '/404' => [
        ['GET', ['NotFoundController', 'index']],
    ]
];
