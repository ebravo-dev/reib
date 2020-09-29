<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::resource('/home', 'HomeController')->only(['index', 'store']);
Route::resource('/articles', 'ArticleController');
Route::resource('/editions', 'EditionController');

Route::get('/ediciones/{year}/{month}', 'ShowarticleController@index')->name('ediciones.show');
