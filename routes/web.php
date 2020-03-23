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
    return view('frontend/index');
});

Auth::routes();

Route::group([
    'middleware' => ['auth'],
    'namespace' => 'BackEnd',
], function () {
    Route::get('/adm', 'DocumentsController@index')->name('admin.index');
    Route::get('/adm/document/edit', 'DocumentsController@edit')->name('admin.document.edit');
    Route::get('/adm/document/delete/{id}', 'DocumentsController@delete')->name('admin.document.delete');
});



Route::get('/home', 'HomeController@index')->name('home');
