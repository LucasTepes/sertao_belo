<?php

use App\Http\Controllers\LobbyControler;
use App\Http\Controllers\PasseioController;
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
