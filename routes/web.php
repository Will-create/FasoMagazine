<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/', 'NewsController@index')->name('accueil');

Route::get('/cat/{categorie}/{id}', 'NewsController@filtre')->name('filtre');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::resource('users','UsersController');


});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::resource('categories','CategoriesController');


});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::resource('provinces','ProvincesController');


});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::resource('regions','RegionsController');


});
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::resource('news','NewsController');


});