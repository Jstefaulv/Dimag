<?php

use Illuminate\Database\Seeder;
use App\Producto;

class PorcionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PORCIONES
        Producto::create([
            'nombreProducto' => "Porcion de Mayonesa",
            'precioProducto' => 550,  
            'idSubFamilia' => 14,
        ]);
        Producto::create([
            'nombreProducto' => "Porcion de Palta",
            'precioProducto' => 1700,  
            'idSubFamilia' => 14,
        ]);
        Producto::create([
            'nombreProducto' => "Porcion de Salsa Golf",
            'precioProducto' => 650,  
            'idSubFamilia' => 14,
        ]);
        Producto::create([
            'nombreProducto' => "Menú",
            'precioProducto' => 8000,  
            'idSubFamilia' => 15,
        ]);
    }
}
