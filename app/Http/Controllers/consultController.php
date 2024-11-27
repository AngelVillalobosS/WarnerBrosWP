<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;

class consultController extends Controller
{
    // Regresar Vistas
    public function consultCategorieView()
    {
        $categorias = \DB::select("
            SELECT c.id_categoria, c.nom_categoria
            FROM categorias AS c
        ");
    
        return view('Catalogos.Categorias.consultarCategoria')
            ->with('categorias', $categorias);
    }
    

    public function consultProductView(){
        // 
    }

    // Controlador de funcionalidad
    public function consultClient(){
        // 
    }

    public function consultCategorieFun(Request $request){
        // Recuperar el ID de la categoría enviado por el formulario
        $idCategoria = $request->input('id_categoria');
    
        // Buscar la categoría en la base de datos (esto depende de tu estructura de base de datos)
        $categoria = Categorias::find($idCategoria);
    
        // Verificar si la categoría existe
        if (!$categoria) {
            return redirect()->route('consultarCategoria')->with('error', 'Categoría no encontrada.');
        }
    
        // Pasar los datos de la categoría a la vista
        return view('Catalogos.Categorias.consultarCategoriaFuncion', compact('categoria'));

    }

    public function consultProduct(){
        
    }
    
    
}
