<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductoPizzaISeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //Basicas
        Producto::create([
            'nombreProducto' => "Napolitana", 
            'precioProducto' => 3250, 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Calabreza", 
            'precioProducto' => 3850, 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Españolisima", 
            'precioProducto' => 4300, 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Tocino", 
            'precioProducto' => 3550, 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Salame", 
            'precioProducto' => 3650, 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Muzarella", 
            'precioProducto' => 2800, 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Muzarella II", 
            'precioProducto' => 3300, 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Esparrago", 
            'precioProducto' => 4000, 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Champiñon", 
            'precioProducto' => 4000, 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Aceituna", 
            'precioProducto' => 4000, 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Ave",
            'precioProducto' => 3900, 
            'idSubFamilia' => 6,
        ]);
        //Especiales
        Producto::create([
            'nombreProducto' => "Dinos",
            'precioProducto' => 5250, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Napolitana palta",
            'precioProducto' => 4150, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Napolitana choricillo",
            'precioProducto' => 4850, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Calabresa jamón",
            'precioProducto' => 4450, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Novisima",
            'precioProducto' => 4650, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Chevalier",
            'precioProducto' => 4900, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Hawaiana",
            'precioProducto' => 4750, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Claudio",
            'precioProducto' => 3700, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Empa-pizza",
            'precioProducto' => 3800, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Kaiser",
            'precioProducto' => 8600, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Kaiser II",
            'precioProducto' => 8100, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Champiñon-Aceituna",
            'precioProducto' => 4900, 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Vegetariana",
            'precioProducto' => 3900, 
            'idSubFamilia' => 7,
        ]);
        //Pizza del mar
        Producto::create([
            'nombreProducto' => "Anchoa",
            'precioProducto' => 5000, 
            'idSubFamilia' => 8,
        ]);
        Producto::create([
            'nombreProducto' => "Atún",
            'precioProducto' => 4450, 
            'idSubFamilia' => 8,
        ]);
        Producto::create([
            'nombreProducto' => "Centolla",
            'precioProducto' => 6400, 
            'idSubFamilia' => 8,
        ]);
        Producto::create([
            'nombreProducto' => "Sardina",
            'precioProducto' => 3950, 
            'idSubFamilia' => 8,
        ]);
        Producto::create([
            'nombreProducto' => "Pulpo",
            'precioProducto' => 5050, 
            'idSubFamilia' => 8,
        ]);
    }
}
