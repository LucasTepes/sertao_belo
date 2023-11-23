<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LobbyControler;
use App\Http\Controllers\LoginController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/auth', [LoginController::class, 'auth'])->name('login.auth');
Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');

Route::get('/passeio', [PasseioController::class, 'index'])->name('passeio.index')->middleware('can:type-user');
Route::post('/passeio', [PasseioController::class, 'store'])->name('passeio.create') ->middleware('can:type-user');;
Route::get('/passeio/{id}/edit', [PasseioController::class, 'edit'])->name('passeio.edit')->middleware('can:type-user');;
Route::put('/passeio/{id}', [PasseioController::class, 'update'])->name('passeio.update')->middleware('can:type-user');;
Route::get('/passeio/list', [PasseioController::class, 'list'])->name('passeio.list')->middleware('can:type-user');;
Route::delete('/passeio/{id}/destroy', [PasseioController::class, 'destroy'])->name('passeio.destroy')->middleware('can:type-user');;

Route::get('/cliente/cadastro', [ClienteController::class,'create'])->name('cliente.create')->middleware('can:type-user');;
Route::post('/cliente', [ClienteController::class, 'store'])->name('cliente.store')->middleware('can:type-user');;
Route::get('/cliente/list', [ClienteController::class, 'list'])->name('cliente.list')->middleware('can:type-user');;
Route::get('.cliente/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit')->middleware('can:type-user');;
Route::put('/cliente/{id}', [ClienteController::class, 'update'])->name('cliente.update')->middleware('can:type-user');;
Route::delete('/cliente/{id}/destroy', [ClienteController::class, 'destroy'])->name('cliente.destroy')->middleware('can:type-user');;


Route::get('/voucher/{id}', [VoucherController::class, 'create'])->name('voucher.create');
Route::post('/voucher', [VoucherController::class, 'store'])->name('voucher.store');
