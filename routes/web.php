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

//================================== ROTAS PARA Solicitação ==================================//
// ROTAS PARA ADICIONAR Solicitação
Route::get('/solicitacao/add', 'SolicitacaoController@get_add_solicitacao')->name('solicitacao.add'); // Rota da view
Route::post('/solicitacao/add', 'SolicitacaoController@post_add_solicitacao')->name('solicitacao.postAdd'); // Rota do formulário

// ROTAS PARA LISTAR Solicitação
Route::get('/solicitacao', function() { return redirect()->route('solicitacoes'); });
Route::post('/solicitacao', 'SolicitacaoController@post_list_solicitacao')->name('solicitacao.list');
Route::get('/solicitacoes', 'SolicitacaoController@list_solicitacoes')->name('solicitacoes');

//ROTAS PARA EDITAR Solicitação
Route::get('/solicitacao/edit/{id}', 'SolicitacaoController@get_edit_solicitacao')->name('solicitacao.edit');
Route::post('/solicitacao/edit/{id}', 'SolicitacaoController@post_edit_solicitacao')->name('solicitacao.postEdit');
Route::get('/solicitacao/delete/{id}', 'SolicitacaoController@delete_solicitacao')->name('solicitacao.delete');
