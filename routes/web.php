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

// Segundo parâmetro da funcção get é uma lista onde o primeiro índice é o controlador e o segundo a action que deverá ser acionada
Route::get('/', [App\Http\Controllers\MainController::class, 'main']);
Route::get('/sobre_nos', [App\Http\Controllers\MainController::class, 'sobreNos']);
Route::get('/contato', [App\Http\Controllers\MainController::class, 'contato']);

;
