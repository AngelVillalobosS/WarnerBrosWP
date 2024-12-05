<?php
/* 
Autor: Angel Gabriel Villalobos Saucedo, Irma Mireya Castro Carranza
Descripción: Controlador que se encarga de eliminar todos los registros de WarnerBrosWP
Fecha de Creación:  Jueves 14, Noviembre 2024
Ultima modificación: Domingo 1, Diciembre 2024
*/

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\clientes;
use Illuminate\Support\Facades\DB;

class deleteController extends Controller
{
    public function deleteClienteView()
    {
        $clientes = clientes::orderby('id_cliente', 'asc')->get();
        return view('Catalogos.Clientes.eliminarClientes')
            ->with('clientes', $clientes);
    }

    public function deleteCategoriaView(){
        $categorias = categorias::orderby('nom_categoria','asc')
	                                  ->get();
        return view('Catalogos.Categorias.eliminarCategoria')->with('categorias',$categorias);
    }

        public function deleteCategoria(Request $request)
    {
        $idCategoria = $request->input('id_categoria');

        // Verifica si el ID existe en la tabla 'categorias'
        $categoria = DB::table('categorias')->where('id_categoria', $idCategoria)->first();

        if ($categoria) {
            // Verificar si la categoría tiene productos asociados
            $productos = DB::table('productos')->where('id_categoria', $idCategoria)->count();

            if ($productos > 0) {
                // Si hay productos asociados, mostrar mensaje de error
                session()->flash('mensaje', 'No se puede eliminar la categoría porque está asociada a productos.');
            } else {
                // Elimina el registro
                DB::table('categorias')->where('id_categoria', $idCategoria)->delete();

                // Mensaje de éxito
                session()->flash('mensaje', 'Categoría eliminada correctamente.');
            }
        } else {
            // Mensaje de error si no existe la categoría
            session()->flash('mensaje', 'La categoría con ID ' . $idCategoria . ' no fue encontrada.');
        }

        // Redirige a la vista de eliminar categoría
        return redirect()->route('eliminarCategoria');
    }




    public function deleteClient(Request $request)
    {
        // Encontrar y eliminar el cliente
        // $cliente = Clientes::find($request->clientes);
        $idCliente = $request->input('clientes');
        
        $cliente = DB::table('clientes')->where('id_cliente', $idCliente)->first();

        if($cliente){
            $ventas = DB::table('ventas')->where('id_cliente', $idCliente)->count();

            if ($ventas > 0) {
                session()->flash('mensaje', "No se puede eliminar al cliente con id '{$idCliente}', porque está asociado a una venta.");
            } else {
                // Delete Client
                DB::table('clientes')->where('id_cliente', $idCliente)->delete();
                //Success Messagge
                session()->flash('mensaje', 'El Cliente fue eliminado correctamente');
            }
        } else {
            session()->flash('mensaje', 'La categoria con ID '.$idCliente.' no fue encontrada');
        }

        // Redireccionar a una vista o lista
        return redirect()->route('eliminarCliente');
    }
}