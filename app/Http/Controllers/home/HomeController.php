<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class HomeController extends Controller
{

    public function interesting() {
        return view('home.interesting');
    }
    public function like() {
        return view('home.like');
    }
}
