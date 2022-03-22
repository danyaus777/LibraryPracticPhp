<?php

use Src\Route;

Route::add('index', [Controller\Site::class, 'index']);
Route::add('signup', [Controller\Site::class, 'signup']);
Route::add('login', [Controller\Site::class, 'login']);
Route::add('logout', [Controller\Site::class, 'logout']);
Route::add('account', [Controller\Site::class, 'account']);
Route::add('books', [Controller\Site::class, 'books']);