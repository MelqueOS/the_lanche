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
Route::resources([
    "cliente" => ClienteController::Class,
    "empresa" =>ClienteController::Class,
    "" => EmpresaController::Class

]);
Route::get('/', function () {
    return view('telascadastro.login');
});
Route::get('/2', function () {
    return view('telascadastro.cadastro');
});
