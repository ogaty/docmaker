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
    'namespace' => 'FrontEnd',
], function() {
    Route::get('/', 'DocumentsController@index')->name('front.index');
    Route::get('/{document_id}', 'DocumentsController@show')->name('front.show');
    Route::get('/{document_id}/', 'DocumentsController@show');
});

Route::group([
    'middleware' => ['auth'],
    'namespace' => 'BackEnd',
], function () {
    Route::get('/adm', 'DocumentsController@index')->name('admin.index');
    Route::get('/adm/document', 'DocumentsController@index');
    Route::get('/adm/document/', 'DocumentsController@index');
    Route::get('/adm/document/{id}', 'DocumentsController@show')->name('admin.document.show');
    Route::get('/adm/document/edit/{id}', 'DocumentsController@edit')->name('admin.document.edit');
    Route::get('/adm/document/delete/{id}', 'DocumentsController@delete')->name('admin.document.delete');
    Route::get('/adm/item/{document_id}/add', 'DocumentItemsController@add')->name('admin.documentitem.add');
    Route::post('/adm/item/{document_id}/complete', 'DocumentItemsController@complete')->name('admin.documentitem.complete');
    Route::get('/adm/item/{document_id}/{item_id}/edit', 'DocumentItemsController@edit')->name('admin.documentitem.edit');
    Route::get('/adm/item/{document_id}/{item_id}/delete', 'DocumentItemsController@edit')->name('admin.documentitem.edit');
});



Route::get('/home', 'HomeController@index')->name('home');
