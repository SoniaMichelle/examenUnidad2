@extends('layout.plantilla')
@section('title','Lista')
@section('contenido')
<div class="row mt-5">
    <div class="col">
        <ul class="list-group">
            <li class="list-group-item active bg-info">Lista de Usuarios</li>
            @foreach($libro as $libros)
            <li class="list-group-item">
                <a class="texto" href="{{route('libros.mostrar', $libros->id)}}">{{$libros->titulo}}</a>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
@section('pagina')
{{$libro->links()}}
@endsection