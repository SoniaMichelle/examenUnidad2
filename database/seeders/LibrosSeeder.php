<?php

namespace Database\Seeders;
use App\Models\Libros;
use Illuminate\Database\Seeder;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $libros = new Libros();

        $libros->titulo="A dos metros de ti";
        $libros->autor="Rachael Lippincott";
        $libros->editorial="Nube de tinta";
        $libros->fecha_publicacion="2019-03-05";
        $libros->numero_pagina="288";
        
        $libros->save();

        $libros2= new Libros();
        
        $libros2->titulo="El vencedor está solo";
        $libros2->autor="Paulo Coelho";
        $libros2->editorial="Editorial Planeta";
        $libros2->fecha_publicacion="2008-01-21";
        $libros2->numero_pagina="416";

        $libros2->save();
    }
}
