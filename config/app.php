<?php
return [
    //Класс аутентификации
    'auth' => \Src\Auth\Auth::class,
    //Класс пользователя
    'identity' => \Model\User::class,
    //Классы для middleware
    'routeMiddleware' => [
        'auth' => \Middleware\AuthMiddleware::class,
    ]
];