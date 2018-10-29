<?php

use Illuminate\Database\Seeder;
use App\Producto;

class AgregadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create([
            'nombreProducto' => "Porcion de Mayonesa",
            'precioProducto' => 550, 
            'RecetaProducto' => "", 
            'idSubFamilia' => 14,
        ]);
        Producto::create([
            'nombreProducto' => "Porcion de Palta",
            'precioProducto' => 1700, 
            'RecetaProducto' => "", 
            'idSubFamilia' => 14,
        ]);
        Producto::create([
            'nombreProducto' => "Porcion de Salsa Golf",
            'precioProducto' => 650, 
            'RecetaProducto' => "", 
            'idSubFamilia' => 14,
        ]);
        Producto::create([
            'nombreProducto' => "Menú",
            'precioProducto' => 8000, 
            'RecetaProducto' => "", 
            'idSubFamilia' => 15,
        ]);
    }
}
