<?php

use Src\Route;

Route::add('GET', '/index', [Controller\Site::class, 'index']);
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/account', [Controller\Site::class, 'account'])->middleware('auth');
Route::add('GET', '/books', [Controller\Site::class, 'books']);
Route::add(['GET', 'POST'], '/addbook', [Controller\Site::class, 'addbook'])->middleware('auth');
Route::add('GET', '/book', [Controller\Site::class, 'bookinfo']);