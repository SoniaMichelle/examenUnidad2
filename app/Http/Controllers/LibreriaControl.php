<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibreriaControl extends Controller
{
    public function index(){
        $libro = Libros::orderBy('id','desc')->paginate();
        return view('libros.index', compact('libro'));
    }
    public function mostrar(Libros $libro){
        return view ('libros.mostrar', compact('libro'));
    }
}
