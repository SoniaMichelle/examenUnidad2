@extends('layout.plantilla')
@section('title','Usuarios' . $libro)
@section('contenido')
<div class="row mt-3">
    <div class="col">
        <button type="button" class="btn btn-dange"><a href="{{route('libros.index')}}"><i class="fas fa-undo-alt"></i></a></button>
     
    </div>
</div>
<div class="row mt-3">
    <div class="col">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4 text-center">Titulo del libro: {{$libro->titulo}}</h1>
                <p class="lead">
                <div class="card mt-3">
                    <p class="text-center mt-2"><small>Datos del libro</small></p>
                    <div class="card-body">
                        <p><strong>Autor: </strong>{{$libro->autor}}</p>
                        <p><strong>Editorial: </strong>{{$libro->editorial}}</p>
                        <p><strong>Fecha: </strong>{{$libro->fecha_publicacion}}</p>
                        <p><strong>Numero de paginas: </strong>{{$libro->numero_pagina}}</p>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection