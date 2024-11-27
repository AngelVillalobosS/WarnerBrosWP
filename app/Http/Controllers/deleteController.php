<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class deleteController extends Controller
{
    public function deleteClienteView(){
        return view('Catalogos.Clientes.eliminarClientes');
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



}
