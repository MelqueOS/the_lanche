<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
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
    "cliente" => ClienteController::Class,
    "empresa" =>EmpresaController::Class,
    "pedido" => PedidoController::Class,
    "produto" => ProdutoController::Class

]);
Route::get('/', function () {
    return view('telascadastro.login');
});
Route::get('/2', function () {
    return view('telascadastro.cadastro');
});
<<<<<<< HEAD

Route::get('/contato', function(){
    return view('telascadastro.contato');
=======
Route::get('/3', function () {
    return view('telascadastro.cadastro2');
});
Route::get('/4', function () {
    return view('telascadastro.cadastro3');
>>>>>>> 69c64f6ee1a1fe2cb17914255035c43261f395ff
});
