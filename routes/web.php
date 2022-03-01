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
Route::get('/', [App\Http\Controllers\MainController::class, 'main'])->name('site.index');
Route::get('/sobre_nos', [App\Http\Controllers\MainController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [App\Http\Controllers\ContatoController::class, 'contatoGet'])->name('site.contato');
Route::post('/contato', [App\Http\Controllers\ContatoController::class, 'contatoPost'])->name('site.contato');
Route::get('/login', [App\Http\Controllers\MainController::class, 'login'])->name('site.login');
Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'test'])->name('teste');

// Agrupamento de rotas 
Route::prefix('/app')->group(
    function () {
        Route::get('/clientes', [App\Http\Controllers\AppController::class, 'clientes'])->name('app.clientes');
        Route::get('/fornecedores', [App\Http\Controllers\FornecedoresController::class, 'index'])->name('fornecedores.index');
        Route::get('/produtos', [App\Http\Controllers\AppController::class, 'produtos'])->name('site.produtos');
    }
);

Route::get('/route1', function(){
    echo 'rota1';
})->name('site.route1');

// redirecionamento de rotas:
Route::get('/route2', function(){
    return redirect()->route('site.route1');
})->name('site.route2');

Route::fallback(function(){
    echo 'Essa rota não existe!';
    echo '<a href="'.route('site.index').'">Página principal</a>';
});
