<?php

use App\Http\Controllers\catalogosController;
use App\Http\Controllers\consultController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\modifyController;
use App\Http\Controllers\productController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\reportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Paginas Principales
Route::get('home', [homeController::class, 'homeView'])->name('home'); // Pagina Principal (Home)

// Catalogos
Route::get('catalogos/cliente', [catalogosController::class, 'catClientesView'])->name('catalogoCliente');

// Consultas
Route::get('catalogos/consultas/clientes', [consultController::class, 'consultClientView'])->name('consultarCliente');
// Route of Mireya
// Route of Bryan

// Eliminar
Route::get('catalogos/eliminar/cliente', [deleteController::class, 'deleteClienteView'])->name('eliminarCliente');
Route::post('catalogos/eiminar/deleteClient', [deleteController::class, 'deleteClient'])->name('deleteClient');

// Modificar
Route::get('catalogos/modificar/cliente', [modifyController::class, 'modifyClientView'])->name('modificarCliente');
// Productos
Route::get('productos/beetlejuice', [productController::class, 'productBeetlejuiceView'])->name('productoBeetlejuice');

// Registrar
Route::get('catalogos/registrar/cliente', [registerController::class, 'registerClientView'])->name('registrarCliente');
Route::get('registrar/devolucion', [registerController::class, 'registerDevolutionView'])->name('registrarDevolucion');
Route::post('registar/guardar-cliente', [registerController::class, 'saveClient'])->name('saveCliente');
Route::post('registrar/guardar-devolucion', [registerController::class, 'saveDevolution'])->name('saveDevolucion');
// Route of Mireya
// Route of Bryan

// Reportes
Route::get('/contenido-mas-vendido', [reportController::class, 'reportContMasVendidoView'])->name('ContenidoMasVendido');
Route::get('/repotes/historial-compras', [reportController::class, 'reportHistComprasView'])->name('historialCommpras');
Route::get('reporte-historial-compra', [reportController::class, 'reportHistorialComprasVista'])->name('reportHistorialCompras');
