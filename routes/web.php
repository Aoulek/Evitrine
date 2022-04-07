<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\evitrineController;
use App\Controllers\HomeController;
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
Route::get('/', 'evitrineController@index' );



Route::get('/home', 'HomeController@index')->name('home');


Route::post('/catégorie/save','CatégorieController@save')->name('save');
Route::get('/catégorie/edit/{id}','CatégorieController@edit')->name('catégorie.edit');
Route::put('/catégorie/update/{id}','CatégorieController@update')->name('catégorie.update');
Route::get('/catégories','CatégorieController@index');
Route::get('/catégories','CatégorieController@list');
Route::get('catégorie/delete/{id}','CatégorieController@delete')->name('catégorie.delete');


Route::get('article/edit/{id}','ArticleController@edit')->name('article.edit');
Route::post('/save','ArticleController@save')->name('article.save');
Route::get('/articles','ArticleController@index');
Route::get('/articles/create', 'ArticleController@create');
Route::get('/articles','ArticleController@list');
Route::put('/update/{id}','ArticleController@update')->name('article.update');
Route::get('/delete/{id}', 'ArticleController@delete')->name('article.delete');


Route::get('/evitrine', 'evitrineController@index')->name('evitrine');

Route::get('/article/{id}/detail','evitrineController@detail');

Route::get('/articles/catégorie/{id}','evitrineController@articles');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
