<?php

namespace Controller;

use Illuminate\Support\Facades\DB;
use Src\View;
use Model\Book;
use Src\Request;
use Model\User;
use Src\Auth\Auth;

class Site
{
    public function index(): string
    {
        $view = new View();
        return $view->render('site.hello', ['message' => 'Главная страница']);
    }

    public function signup(Request $request):string
    {
        if ($request->method==='POST' && User::create($request->all())) {
            app()->route->redirect('/login');
        }
        return new View('site.signup');
    }

    public function login(Request $request): string
    {
        if ($request->method === 'GET') {
            return new View('site.login');
        }
        if (Auth::attempt($request->all())) {
            app()->route->redirect('/account');
        }
        return new View('site.login', ['message' => 'Неправильные логин или пароль']);
    }

    public function logout(): void
    {
        Auth::logout();
        app()->route->redirect('/index');
    }

    public function account(): string
    {
        return new View('site.account');
    }

    public function books(Request $request): string
    {
        $books = Book::all();
        return (new View())->render('site.books', ['books' => $books]);
    }

    public function addbook(Request $request): string
    {
        if ($request->method==='POST' && Book::create($request->all()));
        return new View('site.addbook');
    }

    public function bookinfo(Request $request): string
    {
        $bookinfo = Book::where('id', $request->id)->get();
        return (new View())->render('site.bookinfo', ['bookinfo'=>$bookinfo]);
    }
}