<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\clientes;
use Illuminate\Support\Facades\DB;

// Autores: Irma Mireya Castro Carranza y Ángel Gabriel Villalobos Saucedo
// Este controlador gestiona la eliminación de registros en las tablas de clientes y categorías.

class deleteController extends Controller
{
    // Muestra la vista para eliminar clientes
    public function deleteClienteView()
    {
        $clientes = clientes::orderby('id_cliente', 'asc')->get();
        return view('Catalogos.Clientes.eliminarClientes')
            ->with('clientes', $clientes);
    }

    // Muestra la vista para eliminar categorías
    public function deleteCategoriaView()
    {
        $categorias = categorias::orderby('nom_categoria', 'asc')->get();
        return view('Catalogos.Categorias.eliminarCategoria')
            ->with('categorias', $categorias);
    }

    // Elimina una categoría, verificando que no tenga productos asociados
    public function deleteCategoria(Request $request)
    {
        $idCategoria = $request->input('id_categoria');

        $categoria = DB::table('categorias')->where('id_categoria', $idCategoria)->first();

        if ($categoria) {
            $productos = DB::table('productos')->where('id_categoria', $idCategoria)->count();

            if ($productos > 0) {
                session()->flash('mensaje', 'No se puede eliminar la categoría porque está asociada a productos.');
            } else {
                DB::table('categorias')->where('id_categoria', $idCategoria)->delete();
                session()->flash('mensaje', 'Categoría eliminada correctamente.');
            }
        } else {
            session()->flash('mensaje', 'La categoría con ID ' . $idCategoria . ' no fue encontrada.');
        }

        return redirect()->route('eliminarCategoria');
    }

    // Elimina un cliente, verificando que no esté asociado a ventas
    public function deleteClient(Request $request)
    {
        $idCliente = $request->input('clientes');

        $cliente = DB::table('clientes')->where('id_cliente', $idCliente)->first();

        if ($cliente) {
            $ventas = DB::table('ventas')->where('id_cliente', $idCliente)->count();

            if ($ventas > 0) {
                session()->flash('mensaje', "No se puede eliminar al cliente con id '{$idCliente}', porque está asociado a una venta.");
            } else {
                DB::table('clientes')->where('id_cliente', $idCliente)->delete();
                session()->flash('mensaje', 'El Cliente fue eliminado correctamente');
            }
        } else {
            session()->flash('mensaje', 'El cliente con ID ' . $idCliente . ' no fue encontrado.');
        }

        return redirect()->route('eliminarCliente');
    }
}
