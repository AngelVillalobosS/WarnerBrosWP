<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;
use App\Models\clientes;
use Session;

// Autor: Irma Mireya Castro Carranza y Angel Gabriel Villalobos Saucedo
// Este controlador maneja la modificación de datos de clientes y categorías en la base de datos.

class modifyController extends Controller
{
    // Muestra la vista para modificar clientes
    public function modifyClientView()
    {
        $clientes = clientes::orderby('id_cliente', 'asc')->get();
        return view('Catalogos.Clientes.modificarCliente')
            ->with('clientes', $clientes);
    }

    // Muestra el formulario de modificación de cliente
    public function showModifyClientForm(Request $request)
    {
        $id_cliente = $request->input('clientes');
        $clientes = clientes::find($id_cliente);

        if (!$clientes) {
            return redirect()->route('modificarCliente')->with('error', 'Cliente no encontrado');
        }

        return view('Catalogos.clientes.modificarDatosCliente', [
            'id_cliente' => $id_cliente,
            'nombre_cliente' => $clientes->nombre_cliente,
            'ap_cliente' => $clientes->ap_cliente,
            'am_cliente' => $clientes->am_cliente,
            'telefono' => $clientes->telefono,
            'correo' => $clientes->correo
        ]);
    }

    // Actualiza los datos de un cliente
    public function updateClient(Request $request)
    {
        $id_cliente = $request->input('id_cliente');
        $nuevo_nomb = $request->input('nombre_cliente');
        $nuevo_ap = $request->input('ap_cliente');
        $nuevo_am = $request->input('am_cliente');
        $nuevo_tlfn = $request->input('telefono');
        $nuevo_email = $request->input('correo');

        $clientes = clientes::find($id_cliente);

        if (!$clientes) {
            Session::flash('error', 'Cliente no encontrado');
            return redirect()->route('modificarCliente');
        }

        $clientes->nombre_cliente = $nuevo_nomb;
        $clientes->ap_cliente = $nuevo_ap;
        $clientes->am_cliente = $nuevo_am;
        $clientes->telefono = $nuevo_tlfn;
        $clientes->correo = $nuevo_email;
        $clientes->save();

        Session::flash('mensaje', "El cliente con ID '{$id_cliente}' se ha actualizado exitosamente.");

        return redirect()->route('modificarCliente');
    }

    // Muestra la vista para modificar categorías
    public function modifyCategorieView()
    {
        $categorias = categorias::orderby('nom_categoria','asc')->get();
        return view('Catalogos.Categorias.modificarCategoria')->with('categorias',$categorias);
    }

    // Método sin implementar para modificar productos
    public function modifyProductView()
    {
        // Code of Bryan
    }

    // Muestra el formulario de modificación de categoría
    public function modifyCatFunctView(Request $request)
    {
        $id_categoria = $request->input('id_categoria');
        $categoria = Categorias::find($id_categoria);

        if (!$categoria) {
            return redirect()->route('modificarCategoria')->with('error', 'Categoría no encontrada');
        }

        return view('Catalogos.Categorias.modificarCategoriaFuncion', [
            'id_categoria' => $id_categoria,
            'nombre_categoria' => $categoria->nom_categoria
        ]);
    }

    // Actualiza el nombre de una categoría
    public function updateCategorie(Request $request)
    {
        $id_categoria = $request->input('id_categoria');
        $nuevo_nombre = $request->input('nom_categoria');
        
        $categoria = Categorias::find($id_categoria);

        if (!$categoria) {
            Session::flash('error', 'Categoría no encontrada');
            return redirect()->route('modificarCategoria');
        }

        $categoria->nom_categoria = $nuevo_nombre;
        $categoria->save();

        Session::flash('mensaje', "La categoría con nombre '{$nuevo_nombre}' se ha actualizado exitosamente.");

        return redirect()->route('modificarCategoria');
    }
}
