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
/*
Route::get('/', function () {
    return 'Olá,mundo';
});
Route::get('/sobre-nos', function () {
    return 'Sobre nos';
});
Route::get('/contato', function () {
    return 'Contato';
});
*/
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobrenos']);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);







//$uri = caminho $callback= ação que deve ser tomada quando a rota for requisitada
//Route::get($uri,$callback)

/**
 * verbo http
 * get
 * post
 * put
 * delete
 * options
 * patch
 */