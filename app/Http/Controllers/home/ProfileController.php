<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nik = null) {
        return view('profile.profilePhoto');
    }
    public function profileVideo($nik = null) {
        return view('profile.profileVideo');
    }
    public function profileSaved($nik = null) {
        return view('profile.profileSaved');
    }
    public function profileTagged($nik = null) {
        return view('profile.profileTagged');
    }
    public function edit() {
        return view('profile.edit.main');
    }
}
