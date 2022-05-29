<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AuthController;
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

Route::resources([
    //"cliente" => ClienteController::class,
    "empresa" => EmpresaController::class,
    //"pedido" => PedidoController::class,
    "produto" => ProdutoController::class,
    "login" => AuthController::class,
    "/" => PedidoController::class,
]);
Route::get('/', function () {
    return view('cliente.cardapio');
});
Route::get('/teste', function () {
    return view('cliente.login_copia');
});
Route::get('/1', function () {
    return view('cliente.cadastro_edit');
});

Route::get('/2', function () {
    return view('empresa.cadastro-edit');
});

Route::get('/conteudo', function () {
    return view('conteudo');
});

Route::get('/3', function () {
    return view('produtos.cadastroproduto');
});

Route::get('/4', function () {
    return view('cliente.cardapio');
});

Route::get('/5', function () {
    return view('produtos.cadastrocombo');
});

Route::get('/7', function () {
    return view('empresa.empresa_edit');
});
