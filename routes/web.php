<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', 'HomeController@index');


Route::resource('/home', 'HomeController')->only(['index', 'store']);
Route::resource('/articles', 'ArticleController')->only(['index', 'store']);
Route::resource('/editions', 'EditionController')->only(['index', 'store']);
Route::resource('/notices', 'NoticeController')->only(['index']);

Route::get('/upload-article', 'Uploadarticle@index');
Route::post('/upload-article', 'Uploadarticle@store')->name('upload-article.store');
Route::get('/editions/{year}/{month}', 'ShowarticleController@index')->name('ediciones.show');
Route::get('/search', 'SearchBarController@index')->name('search.index');
Route::post('/search', 'SearchBarController@show')->name('search.show');

Route::get('/new-notice', 'NoticeController@create')->name('new-notice.index');
Route::post('/new-notice', 'NoticeController@store')->name('new-notice.store');
