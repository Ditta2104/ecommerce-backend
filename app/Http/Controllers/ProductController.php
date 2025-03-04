<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ // ESTE METODO ES PARA LISTAR LOS PRODUCTOS
        echo "LISTADO DE PRODUCTOS";
    }

    public function create(){ // FORMULARIO PARA CREAR UN PRODUCTO

    }
    public function show($name, $categoria = null){
        {
            if($categoria == null){
                echo "El producto es:  $name ";
            }else{
                echo "El producto es:  $name y la categoria es: $categoria";
            }
    }
}
}
