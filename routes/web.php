<?php

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


Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'index']);
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'index']);
// Route::get('/suporte', [\App\Http\Controllers\SuporteController::class, 'index']);


Route::fallback(function () {
    return view('fallback');
});