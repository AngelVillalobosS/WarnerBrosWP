<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\catalogosController;
use App\Http\Controllers\consultController;
use App\Http\Controllers\deleteController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\modifyController;

Route::get('/', function () {
    return view('welcome');
});
//Paginas Principales
Route::get('home',[homeController::class,'homeView'])->name('home'); // Pagina Principal (Home)

// Catalogos    
Route::get('catalogos/cliente',[catalogosController::class, 'catClientesView'])->name('catalogoCliente');
Route::get('catalogos/categorias',[catalogosController::class, 'catCategoriasView'])->name('catalogoCategoria');

// Consultas
Route::get('catalogos/consultas/clientes',[consultController::class, 'consulClientView'])->name('consultarCliente');
Route::get('catalogos/consultas/categorias',[consultController::class, 'consultCategorieView'])->name('consultarCategoria');
Route::post('catalogos/consultas/categorias/funtion',[consultController::class, 'consultCategorieFun'])->name('consultCategorieFun');
    // Route of Bryan

// Eliminar
Route::get('catalogos/eliminar/cliente', [deleteController::class, 'deleteClienteView'])->name('eliminarCliente');
Route::get('catalogos/eliminar/categoria', [deleteController::class, 'deleteCategoriaView'])->name('eliminarCategoria');
Route::post('catalogos/eliminar/categoria/delete', [deleteController::class, 'deleteCategoria'])->name('deleteCategoria');

// Modificar
Route::get('catalogos/modificar/categoria', [modifyController::class, 'modifyCategorieView'])->name('modificarCategoria');
Route::post('catalogos/modificar/categoria/funcion', [modifyController::class, 'modifyCatFunctView'])->name('modificarCatFunc');
Route::post('catalogos/modificar/categoria/funcion/update', [modifyController::class, 'updateCategorie'])->name('updateCategorie');




// Productos
Route::get('productos/beetlejuice', [productController::class, 'productBeetlejuiceView'])->name('productoBeetlejuice');

// Registrar
Route::get('catalogos/registrar/cliente',[registerController::class, 'registerClientView'])->name('registrarCliente');
Route::get('registrar/devolucion',[registerController::class, 'registerDevolutionView'])->name('registrarDevolucion');
Route::get('registrar/venta',[registerController::class, 'registerVentaView'])->name('registrarVenta');
Route::get('catalogos/registrar/categoria',[registerController::class, 'registerCategorieView'])->name('registrarCategoria');
Route::POST('catalogos/registrar/categoria',[registerController::class, 'registerCategorie'])->name('registerCategorie');
Route::POST('catalogos/registrar/venta',[registerController::class, 'registerVenta'])->name('registerVenta');
    // Route of Bryan

// Reportes
Route::get('/contenido-mas-vendido', [reportController::class, 'reportContMasVendidoView'])->name('ContenidoMasVendido');
Route::get('/contenido-mas-vendido/contenido', [reportController::class, 'reportContMasVendido'])->name('reportContMasVendido');