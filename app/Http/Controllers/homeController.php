<?php
/* 
Autor: Angel Gabriel Villalobos Saucedo, Irma Mireya Castro Carranza
Descripción: Controlador que se encarga de devolver unicamente la vista de Inicio
Fecha de Creación:  Jueves 14, Noviembre 2024
Ultima modificación: Domingo 1, Diciembre 2024
*/

namespace App\Http\Controllers;

class homeController extends Controller
{
    public function homeView()
    {
        return view('home');
    }
}
