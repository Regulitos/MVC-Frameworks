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
use App\Http\Controllers\ControladorCliente;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ControladorCliente::class, 'control']);

Route::get('/clientes/{id}', [ControladorCliente::class, 'cedula']);

Route::get('clients/{id}', function ( $id ) {
    return 'My id is: ' . $id;
});