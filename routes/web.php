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

Auth::routes();

// ROTAS PARA DESLOGAR E ENVIAR PARA VIEW DE LOGIN
Route::get('/logout', 'Auth\LoginController@logout');

// ROTAS PARA A CONTROLLER HOME - METODO INDEX
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

//================================== ROTAS PARA VEÍCULO ==================================//
// ROTAS PARA ADICIONAR VEICULO


Route::get('/vehicle/add', 'VehicleController@get_add_vehicle')->name('vehicle.add'); // Rota da view
Route::post('/vehicle/add', 'VehicleController@post_add_vehicle')->name('vehicle.postAdd'); // Rota do formulário

// ROTAS PARA LISTAR VEICULO
Route::get('/vehicle', function() { return redirect()->route('vehicles'); });
Route::post('/vehicle', 'VehicleeController@post_list_vehicle')->name('vehicle.list');
Route::get('/vehicles', 'VehicleController@list_vehicles')->name('vehicles');

// ROTAS PARA EDITAR VEICULO
Route::get('/vehicle/edit/{id}', 'VehicleController@get_edit_vehicle')->name('vehicle.edit');
Route::post('/vehicle/edit/{id}', 'VehicleController@post_edit_vehicle')->name('vehicle.postEdit');

// ROTAS PARA DELETAR VEICULO
Route::get('/vehicle/delete/{id}', 'VehicleController@delete_vehicle')->name('vehicle.delete');
