<?php

namespace App\Http\Controllers;
use App\Models\Categorias;
use Illuminate\Http\Request;
use Session;
class modifyController extends Controller
{
    public function modifyClientView(){
        return view('Catalogos.Clientes.modificarClientes');
    }
    
    public function modifyCategorieView(){
        $categorias = categorias::orderby('nom_categoria','asc')
	                                  ->get();
        return view('Catalogos.Categorias.modificarCategoria')->with('categorias',$categorias);
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
   
   // Método para manejar la actualización del nombre de la categoría
   public function updateCategorie(Request $request)
{
    // Obtener los datos del formulario
    $id_categoria = $request->input('id_categoria');
    $nuevo_nombre = $request->input('nom_categoria');
    
    // Buscar la categoría en la base de datos
    $categoria = Categorias::find($id_categoria);

    // Si la categoría no existe, redirigir con un mensaje de error
    if (!$categoria) {
        Session::flash('error', 'Categoría no encontrada');
        return redirect()->route('modificarCategoria');
    }

    // Actualizar el nombre de la categoría
    $categoria->nom_categoria = $nuevo_nombre;
    $categoria->save();

    // Usar Session::flash para guardar el mensaje temporalmente
    Session::flash('mensaje', "La categoría con nombre '{$nuevo_nombre}' se ha actualizado exitosamente.");

    // Redirigir con un mensaje de éxito
    return redirect()->route('modificarCategoria');
}

}
