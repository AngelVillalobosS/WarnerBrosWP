<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;

class modifyController extends Controller
{
    public function modifyClientView(){
        return view('Catalogos.Clientes.modificarClientes');
    }
    
    public function modifyCategorieView(){
        return view('Catalogos.Categorias.modificarCategoria');
    }

    public function modifyProductView(){
        // Code of Bryan
    }
    public function modifyCatFunctView(Request $request)
    {
        // Obtener el ID de la categoría enviado desde el formulario
        $id_categoria = $request->input('id_categoria');
        
        // Buscar la categoría en la base de datos usando el id_categoria
        $categoria = Categorias::find($id_categoria);
        
        // Si la categoría no existe, puedes redirigir o mostrar un mensaje de error
        if (!$categoria) {
            return redirect()->route('modificarCategoria')->with('error', 'Categoría no encontrada');
        }

        // Pasar tanto el id_categoria como el nombre de la categoría a la vista
        return view('Catalogos.Categorias.modificarCategoriaFuncion', [
            'id_categoria' => $id_categoria,
            'nombre_categoria' => $categoria->nom_categoria
        ]);
    }
}
