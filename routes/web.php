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
Route::get('/responder', function () {
    return view('responder');
});

Route::prefix('admin')->namespace('Admin')->group(function(){

    Route::resource('questionarios', 'QuestionarioController')->middleware('auth');
    Route::resource('questoes', 'QuestaoController')->middleware('auth');
    Route::resource('responder', 'ResponderController')->middleware('auth');
    Route::POST('responder/{id}', 'ResponderController@resposta')->name('resposta')->middleware('auth');
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
