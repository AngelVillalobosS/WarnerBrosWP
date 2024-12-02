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
Route::get('catalogos/categorias',[catalogosController::class, 'catCategoriasView'])->name('catalogoCategoria');

// Consultas
Route::get('catalogos/consultas/clientes', [consultController::class, 'consultClientView'])->name('consultarCliente');
Route::get('catalogos/consultas/consulta-cliente', [reportController::class, 'wasa'])->name('consultCliente');
// Route of Mireya
// Route of Bryan
Route::get('catalogos/consultas/clientes',[consultController::class, 'consultClientView'])->name('consultarCliente');
Route::get('catalogos/consultas/categorias',[consultController::class, 'consultCategorieView'])->name('consultarCategoria');
Route::post('catalogos/consultas/categorias/funtion',[consultController::class, 'consultCategorieFun'])->name('consultCategorieFun');
    // Route of Bryan

// Eliminar
Route::get('catalogos/eliminar/cliente', [deleteController::class, 'deleteClienteView'])->name('eliminarCliente');
Route::get('catalogos/eliminar/categoria', [deleteController::class, 'deleteCategoriaView'])->name('eliminarCategoria');
Route::post('catalogos/eliminar/categoria/delete', [deleteController::class, 'deleteCategoria'])->name('deleteCategoria');
Route::post('catalogos/eiminar/deleteClient', [deleteController::class, 'deleteClient'])->name('deleteClient');

// Modificar
Route::get('catalogos/modificar/cliente', [modifyController::class, 'modifyClientView'])->name('modificarCliente');
Route::get('/clientes/modificar/datos', [modifyController::class, 'showModifyClientForm'])->name('modifyCliente');
Route::post('/clientes/modificar', [modifyController::class, 'updateClient'])->name('actualizarCliente');
Route::get('catalogos/modificar/categoria', [modifyController::class, 'modifyCategorieView'])->name('modificarCategoria');
Route::post('catalogos/modificar/categoria/funcion', [modifyController::class, 'modifyCatFunctView'])->name('modificarCatFunc');
Route::post('catalogos/modificar/categoria/funcion/update', [modifyController::class, 'updateCategorie'])->name('updateCategorie');




// Productos
Route::get('productos/beetlejuice', [productController::class, 'productBeetlejuiceView'])->name('productoBeetlejuice');

// Registrar
Route::get('catalogos/registrar/cliente', [registerController::class, 'registerClientView'])->name('registrarCliente');
Route::get('registrar/devolucion', [registerController::class, 'registerDevolutionView'])->name('registrarDevolucion');
Route::post('registar/guardar-cliente', [registerController::class, 'saveClient'])->name('saveCliente');
Route::post('registrar/guardar-devolucion', [registerController::class, 'saveDevolution'])->name('saveDevolucion');
Route::get('/devoluciones/registrar', [registerController::class, 'showDevolucionesForm'])->name('devoluciones.form');
Route::post('/devoluciones/update', [registerController::class, 'updateDevoluciones'])->name('devoluciones.update');

// Route of Mireya
// Route of Bryan
Route::get('catalogos/registrar/cliente',[registerController::class, 'registerClientView'])->name('registrarCliente');
Route::get('registrar/devolucion',[registerController::class, 'registerDevolutionView'])->name('registrarDevolucion');
Route::get('registrar/venta',[registerController::class, 'registerVentaView'])->name('registrarVenta');
Route::get('catalogos/registrar/categoria',[registerController::class, 'registerCategorieView'])->name('registrarCategoria');
Route::POST('catalogos/registrar/categoria',[registerController::class, 'registerCategorie'])->name('registerCategorie');
Route::POST('catalogos/registrar/venta',[registerController::class, 'registerVenta'])->name('registerVenta');
    // Route of Bryan

// Reportes
Route::get('/contenido-mas-vendido', [reportController::class, 'reportContMasVendidoView'])->name('ContenidoMasVendido');
Route::get('/repotes/historial-compras', [reportController::class, 'reportHistComprasView'])->name('historialCommpras');
Route::get('reporte-historial-compra', [reportController::class, 'reportHistorialComprasVista'])->name('reportHistorialCompras');

Route::get('/contenido-mas-vendido/contenido', [reportController::class, 'reportContMasVendido'])->name('reportContMasVendido');