<?php

use App\Http\Controllers\ClientesController;
use App\Http\Controllers\DidsController;
use App\Http\Controllers\RamaisController;
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

//ROTAS DO CLIENTE
Route::put('/clientes/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::get('/clientes/edit/{id}', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::delete('/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
Route::post('/clientes/store', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::get('/visualizar', [ClientesController::class, 'visualizar'])->name('clientes.visualizar');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');

//ROTAS DO DID
Route::put('/dids/{id}', [DidsController::class, 'update'])->name('dids.update');
Route::get('/dids/edit/{id}', [DidsController::class, 'edit'])->name('dids.edit');
Route::delete('/dids/{id}', [DidsController::class, 'destroy'])->name('dids.destroy');
Route::post('/dids/store', [DidsController::class, 'store'])->name('dids.store');
Route::get('/dids/create', [DidsController::class, 'create'])->name('dids.create');
Route::get('/dids', [DidsController::class, 'tabela'])->name('dids.tabela');

//ROTAS DO RAMAL
Route::put('/ramais/{id}', [RamaisController::class, 'update'])->name('ramais.update');
Route::get('/ramais/edit/{id}', [RamaisController::class, 'edit'])->name('ramais.edit');
Route::delete('ramais/{id}', [RamaisController::class, 'destroy'])->name('ramais.destroy');
Route::post('/ramais/store', [RamaisController::class, 'store'])->name('ramais.store');
Route::get('/ramais/create', [RamaisController::class, 'create'])->name('ramais.create');
Route::get('/ramais', [RamaisController::class, 'tabela'])->name('ramais.tabela');


Route::get('/', function () {
    return view('welcome');
});
