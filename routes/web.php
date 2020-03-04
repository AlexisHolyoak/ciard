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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/administration/access','AdminController@index')->name('admin.index');
Route::post('administration/access','AdminController@rolCreation')->name('admin.access.store');
Route::get('/administration/access/edit/{role}','AdminController@rolEdit')->name('admin.access.edit');
Route::post('/administration/access/update/{role}','AdminController@rolUpdate')->name('admin.access.update');

Route::get('/administration/users','AdminController@users')->name('admin.user.index');
