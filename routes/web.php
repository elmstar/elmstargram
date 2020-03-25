<?php
// Ссылка на схему
// https://www.draw.io/#G1Gnozpe44dtFXluQqhaBlRBfOEx7SlJj7
use Illuminate\Support\Facades\Route;


// Регистрация и логин

Route::get('/reg', 'home\LoginController@regOpen')->name('registration');
Route::post('/reg', 'home\LoginController@regSave');
Route::get('/login', 'home\LoginController@loginOpen')->name('login');
Route::post('/login', 'home\LoginController@loginIncome');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'home\LoginController@welcome')->name('home');

    Route::match(['get', 'post'],'/search', 'home\Search@list')->name('search');
    Route::get('/interesting', 'home\HomeController@interesting')->name('interesting');
    Route::get('/like', 'home\HomeController@like')->name('like');

    Route::prefix('profile')->group(function(){ // Решил сгруппировать профиль
        Route::prefix('{nik}')->group(function() {
            Route::get('/', 'home\ProfileController@profile')->name('profile');

            Route::get('/new', 'home\ProfileController@profileArticleNew')->name('profileArticleNew');
            Route::post('/new', 'home\ProfileController@profileArticleNewSave');

            Route::get('/edit/{id}', 'home\ProfileController@profileArticleEdit')->name('profileArticleEdit');
            Route::post('/edit/{id}', 'home\ProfileController@profileArticleEditSave');
            Route::get('/view/{id}', 'home\ProfileController@profileArticleView')->name('profileArticleView');
            Route::post('/view/{id}', 'home\ProfileController@profileArticleViewAddComment');

            Route::get('/photo', 'home\ProfileController@profilePhoto')->name('profilePhoto');
            Route::get('/video', 'home\ProfileController@profileVideo')->name('profileVideo');
            Route::get('/saved', 'home\ProfileController@profileSaved')->name('profileSaved');
            Route::get('/tagged', 'home\ProfileController@profileTagged')->name('profileTagged');
            Route::prefix('edit')->group(function(){
                Route::get('/', 'home\ProfileController@edit')->name('profileEdit');
                Route::post('/', 'home\ProfileController@save');
                Route::get('/change', 'home\ProfileController@editChabge')->name('profileEditChange');
                Route::get('/push', 'home\ProfileController@editPush')->name('profileEditPush');
                Route::get('/secure', 'home\ProfileController@editSecure')->name('profileEditSecure');
                Route::get('/active', 'home\ProfileController@editActive')->name('profileEditActive');
            });
        });
    });

    Route::get('/about', 'help\HelpController@about')->name('about');
    Route::get('/help', 'help\HelpController@help')->name('help');
    Route::get('/developer','help\HelpController@dev')->name('developer');
    Route::get('/jobs', 'help\HelpController@jobs')->name('jobs');
});
Auth::routes();

