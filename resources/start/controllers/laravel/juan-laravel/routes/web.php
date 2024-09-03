<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCliente;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user',[ControladorCliente::class,'index']);

Route::get('/clientes', [ControladorCliente::class, 'control']);

Route::get('/clientes/{id}', [ControladorCliente::class, 'cedula']);

Route::get('clients/{id}', function ( $id ) {
    return 'My id is: ' . $id;
});