<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/produtos', 'ProductsController@index')->name('produtos');


Route::group(['middleware' => 'CheckAdmin',], function()
{
    //é possível ver as rotas que este método cria usando o comando 'php artisan route:list'  (maximizar a janela do terminal antes de rodar o comando para visualizar a lista corretamente)
    Route::resource('estudantes', 'StudentController');

});
