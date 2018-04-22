<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PagesController@home')->name('home');
Route::get('/contact','PagesController@contact')->name('contact');
Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');
Route::get('/about', 'PagesController@about')->name('about');
Route::get('/home', 'PagesController@home')->name('home');

Route::get('/user/{user_id}/profile/{profile_id}', 'ProfileController@show')->name('profile.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([
    'question' => 'QuestionController',
]);


