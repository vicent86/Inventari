<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\Venta_DetallesController;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Laravel\Fortify\Fortify;
use Inertia\Inertia;


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

//Rutas no autenticadas

Route::get('/', [DashboardController::class, 'index']);

Fortify::loginView(function () {
    return Inertia::render('Auth/Login');
});

Fortify::registerView(function () {
    return Inertia::render('Auth/Register');
});


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    //Rutas autenticadas
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('/categories', CategoriaController::class);
    Route::resource('/clientes', ClienteController::class);
    Route::resource('/pagos', PagoController::class);
    Route::resource('/productos', ProductoController::class);
    Route::resource('/proveedores', ProveedorController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/stock', StockController::class);
    Route::resource('/venta_detalles', Venta_DetallesController::class);
    Route::resource('/ventas', VentaController::class);
});


