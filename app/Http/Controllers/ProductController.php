<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ // ESTE METODO ES PARA LISTAR LOS PRODUCTOS
        return view('products.index');
    }

    public function create(){ // FORMULARIO PARA CREAR UN PRODUCTO
        return view('products.create');

    }
    public function show(){
        return view('products.show');
    }
}    
