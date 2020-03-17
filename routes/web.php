<?php
// Ссылка на схему
// https://www.draw.io/#G1Gnozpe44dtFXluQqhaBlRBfOEx7SlJj7
use Illuminate\Support\Facades\Route;


// Регистрация и логин
Route::get('/', 'home\LoginController@welcome')->name('home');
Route::get('/reg', 'home\LoginController@regOpen')->name('registration');
Route::post('/reg', 'home\LoginController@regSave');
Route::get('/login', 'home\LoginController@loginOpen')->name('login');
Route::post('/login', 'home\LoginController@loginIncome');

Route::match(['get', 'post'],'/search', 'home\Search@list')->name('search');
Route::get('/interesting', 'home\HomeController@interesting')->name('interesting');
Route::get('/like', 'home\HomeController@like')->name('like');

Route::get('/profile/{nik?}', 'home\ProfileController@profile')->name('profile');
Route::get('/profile/nik/video', 'home\ProfileController@profileVideo')->name('profileVideo');
Route::get('/profile/nik/saved', 'home\ProfileController@profileSaved')->name('profileSaved');
Route::get('/profile/nik/tagged', 'home\ProfileController@profileTagged')->name('profileTagged');
Route::get('/profile/nik/edit', 'home\ProfileController@edit')->name('profileEdit');

Route::get('/about', 'help\HelpController@about')->name('about');
Route::get('/help', 'help\HelpController@help')->name('help');
Route::get('/developer','help\HelpController@dev')->name('developer');
Route::get('/jobs', 'help\HelpController@jobs')->name('jobs');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
