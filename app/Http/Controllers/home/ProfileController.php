<?php

namespace App\Http\Controllers\home;
use App\User;
use App\Article;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nik = null) {
        $articles = Article::where('author_id',request()->user()->id)->get();
        return view('profile.profileText',['articles' => $articles]);
    }
    public function profileArticleNew() {
        return view('profile.profileTextNew');
    }
    public function profileArticleNewSave() {
        $article = new Article;
        $article->title = request()->title;
        $article->text = \request()->text;
        $article->category_id = 1;
        $article->file_name = 'test';
        $article->author_id = \request()->user()->id;
        $article->save();
        return redirect()->route('profile', ['nik'=>request()->user()->name]);
    }
    public function profileArticleEdit($nik, $id) {
        $article = Article::find($id);

        return view('profile.profileTextEdit', ['article'=>$article]);
    }
    public function profileArticleEditSave($nik, $id){
        $article = Article::find($id);
        $article->title = request()->title;
        $article->text = \request()->text;
        $article->save();
        return redirect()->route('profile', ['nik'=>request()->user()->name]);
        dump(request()->all());
    }
    public function profileArticleView($nik, $id) {
        $article = Article::find($id);
        return view('profile.profileTextView',['article'=>$article]);
    }

    public function profileArticleViewAddComment($nik, $id) {
        $commentFromForm = request()->input('articleComment');
        $article = Article::find($id);
        $comment = new Comment;
        $comment->body = $commentFromForm;
        $comment->commentable_type='Article';
        $comment->commentable_id=$article->id;
        $comment->save();
        return back();
        dd($comment);
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
