<?php
// Ссылка на схему
// https://www.draw.io/#G1Gnozpe44dtFXluQqhaBlRBfOEx7SlJj7
use Illuminate\Support\Facades\Route;


// Регистрация и логин
Route::get('/', 'Controller@welcome')->name('home');
Route::get('/reg', 'home\LoginController@regOpen');
Route::post('/reg', 'home\LoginController@regSave');
Route::get('/login', 'home\LoginController@loginOpen');
Route::post('/login', 'home\LoginController@loginIncome');

Route::match(['get', 'post'],'/search', 'home\Search@list')->name('search');
Route::get('/interesting', 'home\HomeController@interesting')->name('interesting');
Route::get('/like', 'home\HomeController@like')->name('like');
Route::get('/profile/{nik?}', 'home\HomeController@profile')->name('profile');

Route::get('/about', 'help\HelpController@about')->name('about');
Route::get('/help', 'help\HelpController@help')->name('help');
Route::get('/developer','help\HelpController@dev')->name('developer');
Route::get('/jobs', 'help\HelpController@jobs')->name('jobs');



Route::get('/laravel/default', function () {
    return view('welcome');
});

