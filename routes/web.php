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

Route::view('/form','form');


Route::get('/imoveis','PropertyController@index');

Route::get('/imoveis/novo','PropertyController@create');
Route::post('/imoveis/store','PropertyController@store');

Route::get('/imoveis/{name}','PropertyController@show');

Route::get('/imoveis/editar/{name}','PropertyController@edit');
Route::put('/imoveis/update/{name}','PropertyController@update');
Route::get('/imoveis/remover/{name}','PropertyController@destroy');


Route::get('/users/1', 'UserController@index');
Route::get('/getData', 'UserController@getData');

Route::post ('/postData', 'UserController@postData');
// nova forma de fazer versão 8 em diante
// Route::get('/imoveis',
// [PropertyController::class,'index']);
