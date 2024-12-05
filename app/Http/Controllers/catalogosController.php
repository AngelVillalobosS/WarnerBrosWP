<?php
/* 
Autor: Angel Gabriel Villalobos Saucedo, Irma Mireya Castro Carranza
Descripción: Controlador que se encarga de mostrar todos los catalogos de WarnerBrosWP
Fecha de Creación:  Jueves 14, Noviembre 2024
Ultima modificación: Domingo 1, Diciembre 2024
*/
namespace App\Http\Controllers;

class catalogosController extends Controller
{
    public function catClientesView()
    {
        return view('Catalogos.Clientes.clientes');
    }

    public function catCategoriasView(){
        return view('Catalogos.Categorias.categorias');
    }

    public function catProductosView()
    {
        // Code of Bryan
    }
}
