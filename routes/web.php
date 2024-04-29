<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\Venta_DetallesController;
use App\Http\Controllers\VentaController;
use App\Http\Resources\CategoriaCollection;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Laravel\Fortify\Fortify;
use Inertia\Inertia;
use App\Http\Resources\CategoriaResource;
use App\Models\Categoria;


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

Route::get('/', function () {
    return view('frontend.index');
});

//Rutas no autenticadas

//Route::get('/', [DashboardController::class, 'index']);

// Fortify::loginView(function () {
//     return Inertia::render('Auth/Login');
// });

// Fortify::registerView(function () {
//     return Inertia::render('Auth/Register');
// });


//Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
//Rutas autenticadas
// Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
// Route::resource('/categories', CategoriaController::class);
// Route::get('categories/create', [CategoriaController::class, 'create']);
// Route::post('categories/create', [CategoriaController::class, 'store']);
// Route::get('categories/{id}/editar', [CategoriaController::class, 'edit']);
// Route::put('categories/{id}/editar',[CategoriaController::class,'update']);
// Route::get('categories/{id}/eliminar',[CategoriaController::class,'destroy']);

// Route::resource('/clientes', ClienteController::class);
// Route::get('clientes/create', [ClienteController::class, 'create']);
// Route::post('clientes/create', [ClienteController::class, 'store']);
// Route::get('clientes/{id}/editar', [ClienteController::class, 'edit']);
// Route::put('clientes/{id}/editar',[ClienteController::class,'update']);
// Route::get('clientes/{id}/eliminar',[ClienteController::class,'destroy']);

// Route::resource('/pagos', PagoController::class);
// Route::get('pagos/create', [PagoController::class, 'create']);
// Route::post('pagos/create', [PagoController::class, 'store']);
// Route::get('pagos/{id}/editar', [PagoController::class, 'edit']);
// Route::put('pagos/{id}/editar',[PagoController::class,'update']);
// Route::get('pagos/{id}/eliminar',[PagoController::class,'destroy']);
// Route::get('pagos/{id}/generate-pdf',[PdfController::class,'imprimirPago']);

// Route::resource('/productos', ProductoController::class);
// Route::get('productos/create', [ProductoController::class, 'create']);
// Route::post('productos/create', [ProductoController::class, 'store']);
// Route::get('productos/{id}/editar', [ProductoController::class, 'edit']);
// Route::put('productos/{id}/editar',[ProductoController::class,'update']);
// Route::get('productos/{id}/eliminar',[ProductoController::class,'destroy']);

// Route::resource('/proveedores', ProveedorController::class);
// Route::get('proveedores/create', [ProveedorController::class, 'create']);
// Route::post('proveedores/create', [ProveedorController::class, 'store']);
// Route::get('proveedores/{id}/editar', [ProveedorController::class, 'edit']);
// Route::put('proveedores/{id}/editar',[ProveedorController::class,'update']);
// Route::get('proveedores/{id}/eliminar',[ProveedorController::class,'destroy']);

// Route::resource('/stocks', StockController::class);
// Route::get('stocks/create', [StockController::class, 'create']);
// Route::post('stocks/create', [StockController::class, 'store']);
// Route::get('stocks/{id}/editar', [StockController::class, 'edit']);
// Route::put('stocks/{id}/editar',[StockController::class,'update']);
// Route::get('stocks/{id}/eliminar',[StockController::class,'destroy']);

// Route::resource('/venta_detalles', Venta_DetallesController::class);
// Route::get('venta_detalles/create', [Venta_DetallesController::class, 'create']);
// Route::post('venta_detalles/create', [Venta_DetallesController::class, 'store']);
// Route::get('venta_detalles/{id}/editar', [Venta_DetallesController::class, 'edit']);
// Route::put('venta_detalles/{id}/editar',[Venta_DetallesController::class,'update']);
// Route::get('venta_detalles/{id}/eliminar',[Venta_DetallesController::class,'destroy']);

// Route::resource('/ventas', VentaController::class);
// Route::get('ventas/create', [VentaController::class, 'create']);
// Route::post('ventas/create', [VentaController::class, 'store']);
// Route::get('ventas/{id}/editar', [VentaController::class, 'edit']);
// Route::put('ventas/{id}/editar',[VentaController::class,'update']);
// Route::get('ventas/{id}/eliminar',[VentaController::class,'destroy']);
// Route::resource('/roles', RoleController::class);

//});

Route::view('/{any}', 'dashboard')
->middleware(['auth'])
->where('any','.*'); 

