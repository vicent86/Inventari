<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\Venta_DetallesController;
use App\Http\Controllers\VentaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('categorias', CategoriaController::class);
Route::apiResource('clientes', ClienteController::class);
Route::apiResource('productos', ProductoController::class);
Route::apiResource('proveedores', ProveedorController::class);
Route::apiResource('ventas', VentaController::class);
Route::apiResource('pagos', PagoController::class);
Route::apiResource('stocks', StockController::class);
Route::apiResource('venta_detalles', Venta_DetallesController::class);



