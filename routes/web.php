<?php

use App\Http\Controllers\PublicacionController;
use App\Models\Publicacion;
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

Route::get('/', [PublicacionController::class, 'mostrarPublicaciones'])->name('ver.publicaciones');
Route::get('/{slug}', [PublicacionController::class, 'mostrarPublicacion'])->name('ver.publicacion');
Route::get('/registrar', [PublicacionController::class, 'vistaAgregarPublicacion'])->name('agregar.vista');
Route::post('/registrar', [PublicacionController::class, 'agregarPublicacion'])->name('agregar');
