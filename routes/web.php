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
// nova forma de fazer versão 8 em diante
// Route::get('/imoveis',
// [PropertyController::class,'index']);

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form', 'form');

Route::get('/imoveis', 'PropertyController@index');

Route::get('/imoveis/novo', 'PropertyController@create');
Route::post('/imoveis/store', 'PropertyController@store');

Route::get('/imoveis/{name}', 'PropertyController@show');

Route::get('/imoveis/editar/{name}', 'PropertyController@edit');
Route::put('/imoveis/update/{name}', 'PropertyController@update');
Route::get('/imoveis/remover/{name}', 'PropertyController@destroy');

Route::get('/users/1', 'UserController@index');
Route::get('/getData', 'UserController@getData');

Route::post('/postData', 'UserController@postData');

Route::put('/users/1', 'UserController@testPut');

Route::patch('/users/1', 'UserController@testPatch');

Route::match(['put', 'patch'], '/users/2', 'UserController@testMatch');

Route::delete('/users/1', 'UserController@destroy');

Route::any('/users/1', 'UserController@destroy');

Route::get('/users/1', function () {
    echo 'Listagem dos usuarios da minha base';
});

Route::view('/form', 'form');

Route::fallback(function () {
    echo '<h1>ops seja muito bem vindo a nossa pagina 404</h1>';
});

Route::redirect('/users/add', url('/form'), 301);

Route::get('/posts', 'PostController@index')->name('posts.index');
Route::get('/posts/index', 'PostController@indexRedirect')->name('posts.indexRedirect');

Route::get('/users/{id}/comments/{comment?}', function ($id, $comment = null) {
    var_dump($id, $comment);
})->where(['id' => '[0-9]+', 'comment' => '[a-zA-Z0-9]+']);

// ou

Route::get('/users/{id}/comments/{comment?}', 'UserController@userComments')->where(['id' => '[0-9]+', 'comment' => '[a-zA-Z0-9]+']);

Route::get('/users/1', 'UserController@inspect')->name('inspect');

Route::prefix('admin')->group(function () {
    Route::view('/form', 'form');
});

Route::name('admin.posts.')->group(function () {
    Route::get('/admin/posts/index', 'PostController@index')->name('index');
    Route::get('/admin/posts', 'PostController@show')->name('show');
});

Route::middleware(['throttle:10,1'])->group(function () {
    Route::view('/form', 'form');
});

Route::namespace('Admin')->group(function () {
    Route::get('/users', 'UserController@index');
});

Route::group(
    ['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['throttle:10,1'], 'as' => 'admin.'],
    function () {
        Route::resource('users', 'UserController');
    }
);
