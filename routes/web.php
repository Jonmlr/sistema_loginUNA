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


Route::get('/', function (){
   	return view('auth/login');}
		  );
		  
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/helpage', 'HelpageController@index')->name('helpage');	
	

Route::middleware(['auth'])->group(function(){

//Lugar
Route::post('lugar/store','LugarController@store')->name('lugar.store')->middleware('permission:lugar.create');

Route::get('lugar','LugarController@index')->name('lugar.index')->middleware('permission:lugar.index');

Route::get('lugar/create','LugarController@create')->name('lugar.create')->middleware('permission:lugar.create');

Route::put('lugar/{lugar}','LugarController@update')->name('lugar.update')->middleware('permission:lugar.edit');

Route::get('lugar/{lugar}','LugarController@show')->name('lugar.show')->middleware('permission:lugar.show');

Route::delete('lugar/{lugar}','LugarController@destroy')->name('lugar.destroy')->middleware('permission:lugar.destroy');

Route::get('lugar/{lugar}/edit','LugarController@edit')->name('lugar.edit')->middleware('permission:lugar.edit');

//Asignado

Route::post('asignado/store','AsignadoController@store')->name('asignado.store')->middleware('permission:asignado.create');

Route::get('asignado','AsignadoController@index')->name('asignado.index')->middleware('permission:asignado.index');

Route::get('asignado/create','AsignadoController@create')->name('asignado.create')->middleware('permission:asignado.create');

Route::put('asignado/{asignado}','AsignadoController@update')->name('asignado.update')->middleware('permission:asignado.edit');

Route::get('asignado/{asignado}','AsignadoController@show')->name('asignado.show')->middleware('permission:asignado.show');

Route::delete('asignado/{asignado}','AsignadoController@destroy')->name('asignado.destroy')->middleware('permission:asignado.destroy');

Route::get('asignado/{asignado}/edit','AsignadoController@edit')->name('asignado.edit')->middleware('permission:asignado.edit');

//TipoEquipo

Route::post('tipoequipo/store','TipoEquipoController@store')->name('tipoequipo.store')->middleware('permission:tipoequipo.create');

Route::get('tipoequipo','TipoEquipoController@index')->name('tipoequipo.index')->middleware('permission:tipoequipo.index');

Route::get('tipoequipo/create','TipoEquipoController@create')->name('tipoequipo.create')->middleware('permission:tipoequipo.create');

Route::put('tipoequipo/{tipoequipo}','TipoEquipoController@update')->name('tipoequipo.update')->middleware('permission:tipoequipo.edit');

Route::get('tipoequipo/{tipoequipo}','TipoEquipoController@show')->name('tipoequipo.show')->middleware('permission:tipoequipo.show');

Route::delete('tipoequipo/{tipoequipo}','TipoEquipoController@destroy')->name('tipoequipo.destroy')->middleware('permission:tipoequipo.destroy');

Route::get('tipoequipo/{tipoequipo}/edit','TipoEquipoController@edit')->name('tipoequipo.edit')->middleware('permission:tipoequipo.edit');

//MarcaEquipo

Route::post('marcaequipo/store','MarcaController@store')->name('marcaequipo.store')->middleware('permission:marcaequipo.create');

Route::get('marcaequipo','MarcaController@index')->name('marcaequipo.index')->middleware('permission:marcaequipo.index');

Route::get('marcaequipo/create','MarcaController@create')->name('marcaequipo.create')->middleware('permission:marcaequipo.create');

Route::put('marcaequipo/{marcaequipo}','MarcaController@update')->name('marcaequipo.update')->middleware('permission:marcaequipo.edit');

Route::get('marcaequipo/{marcaequipo}','MarcaController@show')->name('marcaequipo.show')->middleware('permission:marcaequipo.show');

Route::delete('marcaequipo/{marcaequipo}','MarcaController@destroy')->name('marcaequipo.destroy')->middleware('permission:marcaequipo.destroy');

Route::get('marcaequipo/{marcaequipo}/edit','MarcaController@edit')->name('marcaequipo.edit')->middleware('permission:marcaequipo.edit');

//Equipo

Route::post('equipo/store','EquipoController@store')->name('equipo.store')->middleware('permission:equipo.create');

Route::get('equipo','EquipoController@index')->name('equipo.index')->middleware('permission:equipo.index');

Route::get('equipo/create','EquipoController@create')->name('equipo.create')->middleware('permission:equipo.create');

Route::put('equipo/{equipo}','EquipoController@update')->name('equipo.update')->middleware('permission:equipo.edit');

Route::get('equipo/{equipo}','EquipoController@show')->name('equipo.show')->middleware('permission:equipo.show');

Route::delete('equipo/{equipo}','EquipoController@destroy')->name('equipo.destroy')->middleware('permission:equipo.destroy');

Route::get('equipo/{equipo}/edit','EquipoController@edit')->name('equipo.edit')->middleware('permission:equipo.edit');

//Roles

Route::post('role/store','RoleController@store')->name('role.store')->middleware('permission:role.create');

Route::get('role','RoleController@index')->name('role.index')->middleware('permission:role.index');

Route::get('role/create','RoleController@create')->name('role.create')->middleware('permission:role.create');

Route::put('role/{role}','RoleController@update')->name('role.update')->middleware('permission:role.edit');

Route::get('role/{role}','RoleController@show')->name('role.show')->middleware('permission:role.show');

Route::delete('role/{role}','RoleController@destroy')->name('role.destroy')->middleware('permission:role.destroy');

Route::get('role/{role}/edit','RoleController@edit')->name('role.edit')->middleware('permission:role.edit');

//User

Route::post('user/store','UserController@store')->name('user.store')->middleware('permission:user.create');

Route::get('user','UserController@index')->name('user.index')->middleware('permission:user.index');

Route::get('user/create','UserController@create')->name('user.create')->middleware('permission:user.create');

Route::put('user/{user}','UserController@update')->name('user.update')->middleware('permission:user.edit');

Route::get('user/{user}','UserController@show')->name('user.show')->middleware('permission:user.show');

Route::delete('user/{user}','UserController@destroy')->name('user.destroy')->middleware('permission:user.destroy');

Route::get('user/{user}/edit','UserController@edit')->name('user.edit')->middleware('permission:user.edit');

	});



//Route::resource('tipoequipo', 'TipoEquipoController');
//Route::resource('marcaequipo', 'MarcaController');
Route::resource('movimientoequipo', 'MovimientoController');
//Route::resource('equipo', 'EquipoController');
//Route::resource('lugar', 'LugarController');
Route::resource('inventario', 'InventarioController');
//Route::resource('asignado', 'AsignadoController');


Route::Auth();

	
	
	

