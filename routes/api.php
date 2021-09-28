<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/categorias', [ApiController::class, 'categorias']);
Route::get('/marcas', [ApiController::class, 'marcas']);
Route::get('/tipos', [ApiController::class, 'tipos']);
Route::get('/formas', [ApiController::class, 'formas']);
Route::get('/productos', [ApiController::class, 'productos']);
Route::get('/inventario/{producto}', [ApiController::class, 'inventario']);

Route::post('/contacto', [ApiController::class, 'contacto']);
