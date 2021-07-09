<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


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

#Route::get('/', function () {
#});

Route::get('abm-preguntasfrecuentes',[FAQController::class,'obtenerTabla'])->name('cargarTabla');

Route::post('AltaPregunta',[FAQController::class,'guardarRegistro'])->name('AltaPregunta');

Route::post('modificarRegistro',[FAQController::class, 'modificarRegistro'])->name('modificarRegistro');

Route::post('eliminarRegistro',[FAQController::class, 'eliminarRegistro'])->name('eliminarRegistro');

Route::post('toggleRegistro',[FAQController::class, 'toggleRegistro'])->name('toggleRegistro');