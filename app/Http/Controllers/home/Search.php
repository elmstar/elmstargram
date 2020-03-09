<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Search extends Controller
{
    public function list() {
        return view('layouts.searching');
    }
}
