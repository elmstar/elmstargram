<?php

namespace App\Http\Controllers\home;
use App\User;
use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nik = null) {
        $articles = Article::all();
        return view('profile.profileText',['articles' => $articles]);
    }
    public function profileArticleNew() {
        return view('profile.profileTextNew');
    }
    public function profilePhoto($nik = null) {
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
        $user = request()->user();
        return view('profile.edit.main',[
            'user'=>$user
        ]);
    }
    public function save() {
        $user = User::find(request()->input('id'));
        if (User::where('email','!=',\request()->input('email'))) {
            $user->email = request()->input('email');
        }
        if (User::where('email','!=',\request()->input('name'))) {
            $user->name = request()->input('name');
        }
        $user->save();
        return redirect()->route('profile',['nik'=>$user->name]);
    }
    public function editChabge() {
        return view('profile.edit.main');
    }
    public function editPush() {
        return view('profile.edit.main');
    }
    public function editSecure() {
        return view('profile.edit.main');
    }
    public function editActive() {
        return view('profile.edit.main');
    }
}
