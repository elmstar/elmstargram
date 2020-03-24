<?php

namespace App\Http\Controllers\home;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function welcome() {                     // Стартовая страница
        $users = User::all();
        return view('welcome',['users'=>$users]);
    }
    /*public function regOpen() {                     // Страница регистрации(открываем форму ввода)

        return view('home.reg');
    }
    public function regSave(Request $request) {     // Страница регистрации(сохранение данных из формы)


    }
    public function loginOpen() {                   // Страница аутентификации(открытие формы)
        return view('home.login');
    }

    public function loginIncome(Request $request) { // страница аутентификации(обработка введённых данных)

    }*/
}
