<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function productBeetlejuiceView(){
        return view('Products.Beetlejuice');
    }
}
