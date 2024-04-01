<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\CuidadorController;
use App\Http\Controllers\EspecieController;
use App\Http\Controllers\RecintoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('actividad', [ActividadController::class, 'index']);
Route::get('actividad/{id}', [ActividadController::class, 'show']);
Route::post('actividad', [ActividadController::class, 'store']);
Route::patch('actividad/{id}', [ActividadController::class, 'update']);
Route::delete('actividad/{id}', [ActividadController::class, 'destroy']);

Route::get('animal', [AnimalController::class, 'index']);
Route::get('animal/{id}', [AnimalController::class, 'show']);
Route::post('animal', [AnimalController::class, 'store']);
Route::patch('animal/{id}', [AnimalController::class, 'update']);
Route::delete('animal/{id}', [AnimalController::class, 'destroy']);

Route::get('cuidador', [CuidadorController::class, 'index']);
Route::get('cuidador/{id}', [CuidadorController::class, 'show']);
Route::post('cuidador', [CuidadorController::class, 'store']);
Route::patch('cuidador/{id}', [CuidadorController::class, 'update']);
Route::delete('cuidador/{id}', [CuidadorController::class, 'destroy']);

Route::get('especie', [EspecieController::class, 'index']);
Route::get('especie/{id}', [EspecieController::class, 'show']);
Route::post('especie', [EspecieController::class, 'store']);
Route::patch('especie/{id}', [EspecieController::class, 'update']);
Route::delete('especie/{id}', [EspecieController::class, 'destroy']);

Route::get('recinto', [RecintoController::class, 'index']);
Route::get('recinto/{id}', [RecintoController::class, 'show']);
Route::post('recinto', [RecintoController::class, 'store']);
Route::patch('recinto/{id}', [RecintoController::class, 'update']);
Route::delete('recinto/{id}', [RecintoController::class, 'destroy']);
