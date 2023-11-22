<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LobbyControler;
use App\Http\Controllers\PasseioController;
use App\Http\Controllers\VoucherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LobbyControler::class, 'index'])->name('lobby.index');

Route::get('/passeio', [PasseioController::class, 'index'])->name('passeio.index');
Route::post('/passeio', [PasseioController::class, 'store'])->name('passeio.create');
Route::get('/passeio/{id}/edit', [PasseioController::class, 'edit'])->name('passeio.edit');
Route::put('/passeio/{id}', [PasseioController::class, 'update'])->name('passeio.update');

Route::get('/cliente/cadastro', [ClienteController::class,'create'])->name('cliente.create');
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store');
Route::get('/cliente/list', [ClienteController::class, 'list'])->name('cliente.list');
Route::get('.cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update');


Route::get('/voucher/{id}', [VoucherController::class, 'create'])->name('voucher.create');
