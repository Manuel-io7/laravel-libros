<?php
use App\Categoria;
use App\Etiqueta;
use Carbon\Carbon;
use App\Libro;
use App\User;
use Illuminate\Database\Seeder;

class LibrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create();
      //  Categoria::truncate();

       // $categoria = new Categoria();
       // $categoria->nombre = "Categoria 1";
       // $categoria->save();

        
       // $categoria = new Categoria();
       // $categoria->nombre = "Categoria 2";
       // $categoria->save();
       factory(Categoria::class, 10)->create();

       // Etiqueta::truncate();

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "Etiqueta 1";
        $etiqueta->save();

        $etiqueta = new Etiqueta();
        $etiqueta->nombre = "Etiqueta 2";
        $etiqueta->save();

        // Libro::truncate();

        $libro = new Libro();
        $libro->titulo ="Primer libro";
        $libro->descripcion = "Extracto de primer libro";
        $libro->contenido = "<p> Resumen primer libro</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 1;
        $libro->save();

        $libro->etiquetas()->attach([1, 2]);
        
        $libro = new Libro();
        $libro->titulo ="Segundo libro";
        $libro->descripcion = "Extracto de segundo libro";
        $libro->contenido = "<p> Resumen segundo libro</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 1;
        $libro->save();

        $libro->etiquetas()->attach([1]);

        $libro = new Libro();
        $libro->titulo ="tercer libro";
        $libro->descripcion = "Extracto de tercer libro";
        $libro->contenido = "<p> Resumen tercer libro</p>";
        $libro->fecha = Carbon::now();
        $libro->categoria_id = 1;
        $libro->save();

        $libro->etiquetas()->attach([2]);
    }
}
