<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::created([
            'nombre' => 'Tecnología',
            'descripcion' => 'Artículos relacionados con la tecnología en general',
            'estado' => 'Activo'
        ]);

        Categoria::created([
            'nombre' => 'Hogar',
            'descripcion' => 'Artículos relacionados con el hogar en general',
            'estado' => 'Activo'
        ]);

        Categoria::created([
            'nombre' => 'Gadgets',
            'descripcion' => 'Artículos relacionados aparatos electrónicos en general',
            'estado' => 'Activo'
        ]);

        Categoria::created([
            'nombre' => 'Informatica',
            'descripcion' => 'Artículos relacionados con la informatica en general',
            'estado' => 'Activo'
        ]);

        Categoria::created([
            'nombre' => 'Muebles',
            'descripcion' => 'Artículos relacionados con el mueble en general',
            'estado' => 'Activo'
        ]);

        Categoria::created([
            'nombre' => 'Zapatos',
            'descripcion' => 'Artículos relacionados con el calzado en general',
            'estado' => 'Activo'
        ]);


    }
}
