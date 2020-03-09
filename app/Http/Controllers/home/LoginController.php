<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function regOpen() {

        return view('home.reg');
    }
    public function regSave(Request $request) {


    }
    public function loginOpen() {
        return view('home.login');
    }

    public function loginIncome(Request $request) {

    }
}
