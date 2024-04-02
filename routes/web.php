<?php


use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Ruta Proveedor
Route::get('/proveedores', [App\Http\Controllers\ProveedorController::class, 'index']);
Route::get('/proveedores/create', [App\Http\Controllers\ProveedorController::class, 'create']);
Route::get('/proveedores/{proveedor}/edit', [App\Http\Controllers\ProveedorController::class, 'edit']);
Route::post('/proveedores', [App\Http\Controllers\ProveedorController::class, 'sendData']);
Route::put('/proveedores/{proveedor}', [App\Http\Controllers\ProveedorController::class, 'update']);
Route::delete('/proveedores/{proveedor}', [App\Http\Controllers\ProveedorController::class, 'destroy']);

//Ruta Categorias
Route::get('/categorias', [App\Http\Controllers\CategoriaProductoController::class, 'index']);
Route::get('/categorias/create', [App\Http\Controllers\CategoriaProductoController::class, 'create']);
Route::get('/categorias/{categoria}/edit', [App\Http\Controllers\CategoriaProductoController::class, 'edit']);
Route::post('/categorias', [App\Http\Controllers\CategoriaProductoController::class, 'sendData']);
Route::put('/categorias/{categoria}', [App\Http\Controllers\CategoriaProductoController::class, 'update']);
Route::delete('/categorias/{categoria}', [App\Http\Controllers\CategoriaProductoController::class, 'destroy']);

//Ruta laboratorio
Route::get('/laboratorios', [App\Http\Controllers\LaboratorioController::class, 'index']);
Route::get('/laboratorios/create', [App\Http\Controllers\LaboratorioController::class, 'create']);
Route::get('/laboratorios/{laboratorio}/edit', [App\Http\Controllers\LaboratorioController::class, 'edit']);
Route::post('/laboratorios', [App\Http\Controllers\LaboratorioController::class, 'sendData']);
Route::put('/laboratorios/{laboratorio}', [App\Http\Controllers\LaboratorioController::class, 'update']);
Route::delete('/laboratorios/{laboratorio}', [App\Http\Controllers\LaboratorioController::class, 'destroy']);

//Ruta producto
Route::get('/productos', [App\Http\Controllers\ProductoController::class, 'index']);
Route::get('/productos/create', [App\Http\Controllers\ProductoController::class, 'create']);
Route::get('/productos/{producto}/edit', [App\Http\Controllers\ProductoController::class, 'edit']);
Route::post('/productos', [App\Http\Controllers\ProductoController::class, 'sendData']);
Route::put('/productos/{producto}', [App\Http\Controllers\ProductoController::class, 'update']);
Route::delete('/productos/{producto}', [App\Http\Controllers\ProductoController::class, 'destroy']);

//Ruta Lote
Route::get('/lotes', [App\Http\Controllers\LoteController::class, 'index']);
Route::get('/lotes/create', [App\Http\Controllers\LoteController::class, 'create']);
Route::get('/lotes/{lote}/edit', [App\Http\Controllers\LoteController::class, 'edit']);
Route::post('/lotes', [App\Http\Controllers\LoteController::class, 'sendData']);
Route::put('/lotes/{lote}', [App\Http\Controllers\LoteController::class, 'update']);
Route::delete('/lotes/{lote}', [App\Http\Controllers\LoteController::class, 'destroy']);


//Ruta ventas
Route::get('/ventas', [App\Http\Controllers\VentasController::class, 'index']);
Route::get('/ventas/create', [App\Http\Controllers\VentasController::class, 'create']);
Route::get('/ventas/{venta}/edit', [App\Http\Controllers\VentasController::class, 'edit']);
Route::post('/ventas', [App\Http\Controllers\VentasController::class, 'sendData']);
Route::put('/ventas/{venta}', [App\Http\Controllers\VentasController::class, 'update']);
Route::delete('/ventas/{venta}', [App\Http\Controllers\VentasController::class, 'destroy']);

//Ruta usuario
Route::get('/usuarios', [App\Http\Controllers\UsuarioController::class, 'index']);
Route::get('/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create']);
Route::get('/usuarios/{usuario}/edit', [App\Http\Controllers\UsuarioController::class, 'edit']);
Route::post('/usuarios', [App\Http\Controllers\UsuarioController::class, 'sendData']);
Route::put('/usuarios/{usuario}', [App\Http\Controllers\UsuarioController::class, 'update']);
Route::delete('/usuarios/{usuario}', [App\Http\Controllers\UsuarioController::class, 'destroy']);