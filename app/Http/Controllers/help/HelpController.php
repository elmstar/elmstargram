<?php

namespace App\Http\Controllers\help;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function about() {
        return view('help.about');
    }
    public function help() {
        return view('help.help');
    }
    public function dev() {
        return view('help.dev');
    }
    public function jobs() {
        return view('help.jobs');
    }
}
