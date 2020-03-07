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
Route::get('/administration/users/create','AdminController@createUser')->name('admin.user.create');
Route::post('/administration/users/create','AdminController@storeUser')->name('admin.user.store');
Route::get('/administration/users/edit/{usuario}', 'AdminController@editUser')->name('admin.user.edit');
Route::post('/administration/users/update/{usuario}', 'AdminController@updateUser')->name('admin.user.update');
Route::post('/administration/users/update/rol/{usuario}','AdminController@updateUserRole')->name('admin.user.update.role');
Route::post('/administration/users/update/permission/{usuario}','AdminController@updateUserPermission')->name('admin.user.update.permission');

Route::get('/administration/location','AdminController@location')->name('admin.location.index');
Route::get('/administration/location/district/{district}', 'AdminController@showDistrict')->name('admin.location.show.district');
Route::post('/administration/location/district', 'AdminController@zones')->name('admin.location.district');
Route::get('/administration/location/district/{district}/zone/create','AdminController@createZone')->name('admin.location.create.zone');
Route::post('/administration/location/district/{district}/zone/store','AdminController@storeZone')->name('admin.location.store.zone');
Route::get('/administration/location/zone/{zone}/urbanspaces','AdminController@urbanSpaces')->name('admin.location.urbanspace.index');
Route::post('/administration/location/zone/{zone}/urbanspaces','AdminController@storeUrbanSpace')->name('admin.location.urbanspace.store');
Route::get('/administration/location/urbanspace/{urbanspace}/buildings','AdminController@buildings')->name('admin.location.building.index');
Route::post('/administration/location/urbanspace/{urbanspace}/buildings','AdminController@storeBuilding')->name('admin.location.building.store');
Route::delete('/administration/location/delete/building/{building}','AdminController@deleteBuilding')->name('admin.location.building.delete');

Route::put('/administration/location/update/zone/{zone}','AdminController@updateZone')->name('admin.location.update.zone');
Route::put('/administration/location/update/urbanspace/{urbanspace}','AdminController@updateUrbanSpace')->name('admin.location.update.urbanspace');
//AJAX UBIGEO
Route::get('/ajax-departments/',function(){
    return Response::json(App\Department::all());
});
Route::get('/ajax-provinces/{id}',function($id){
    return Response::json(App\Province::where('department_id', $id)->get());
});
Route::get('/ajax-districts/{id}',function($id){
    return Response::json(App\District::where('province_id', $id)->get());
});
