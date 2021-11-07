<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibreriaControl extends Controller
{
    public function index(Libros $libro)
    {
        $libro = Libros::orderBy('id', 'asc')->paginate();
        return view('libros.index', compact('libro'));
    }
    public function actualizar(Libros $libro){
        return view('libros.actualizar',compact('libro'));
    }
    public function update(Request $request, Libros $libro){
        $libro->titulo = $request->titulo;
        $libro->autor = $request->autor;
        $libro->editorial = $request->editorial;
        $libro->fecha_publicacion = $request->fecha_publicacion;
        $libro->numero_pagina = $request->numero_pagina;

        $libro->save();
        return redirect()->route('libros.index', $libro);
    }
    public function eliminar(Libros $libro){
        $libro->delete();
        return redirect()->route('libros.index');
    }
}
