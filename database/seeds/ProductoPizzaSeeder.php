<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductoPizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Basicas
        Producto::create([
            'nombreProducto' => "Napolitana", 
            'precioProducto' => 3250, 
            'RecetaProducto' => "Salsa de tomate, jamon, queso.", 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Calabreza", 
            'precioProducto' => 3850, 
            'RecetaProducto' => "Salsa de tomate, chorizo, queso.", 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Españolisima", 
            'precioProducto' => 4300, 
            'RecetaProducto' => "Salsa de tomate, choricillo, queso.", 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Tocino", 
            'precioProducto' => 3550, 
            'RecetaProducto' => "Salsa de tomate, tocino, queso.", 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Salame", 
            'precioProducto' => 3650, 
            'RecetaProducto' => "Salsa de tomate, salame, queso.", 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Muzarella", 
            'precioProducto' => 2800, 
            'RecetaProducto' => "Salsa de tomate, queso, orégano.", 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Muzarella II", 
            'precioProducto' => 3300, 
            'RecetaProducto' => "Salsa de tomate, queso, tomate natural, orégano.", 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Esparrago", 
            'precioProducto' => 4000, 
            'RecetaProducto' => "Salsa de tomate, espárrago, queso.", 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Champiñon", 
            'precioProducto' => 4000, 
            'RecetaProducto' => "Salsa de tomate, champiñon, queso.", 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Aceituna", 
            'precioProducto' => 4000, 
            'RecetaProducto' => "Salsa de tomate, aceitunas, oregano.", 
            'idSubFamilia' => 6,
        ]);
        Producto::create([
            'nombreProducto' => "Ave",
            'precioProducto' => 3900, 
            'RecetaProducto' => "Salsa de tomate, pechuga de pollo, queso.", 
            'idSubFamilia' => 6,
        ]);
        //Especiales
        Producto::create([
            'nombreProducto' => "Dino's",
            'precioProducto' => 5250, 
            'RecetaProducto' => "Salsa de tomate, jamón, chorizo, carne de crustáceo, queso, salsa golf.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Napolitana palta",
            'precioProducto' => 4150, 
            'RecetaProducto' => "Salsa de tomate, jamón, palta, queso.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Napolitana choricillo",
            'precioProducto' => 4850, 
            'RecetaProducto' => "Salsa de tomate, jamón, choricillo, queso.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Calabresa jamón",
            'precioProducto' => 4450, 
            'RecetaProducto' => "Salsa de tomate, jamón, chorizo, queso.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Novisima",
            'precioProducto' => 4650, 
            'RecetaProducto' => "Salsa de tomate, jamón, espárrago, queso.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Chevalier",
            'precioProducto' => 4900, 
            'RecetaProducto' => "Salsa de tomate, tocino, espárrago, queso.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Hawaiana",
            'precioProducto' => 4750, 
            'RecetaProducto' => "Salsa de tomate, jamón, piña, queso, marrasquino.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Claudio",
            'precioProducto' => 3700, 
            'RecetaProducto' => "Salsa de tomate, jamón, queso, cebolla a la pluma.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Empa-pizza",
            'precioProducto' => 3800, 
            'RecetaProducto' => "Salsa de tomate, carne en tuco, queso.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Kaiser",
            'precioProducto' => 8600, 
            'RecetaProducto' => "Salsa de tomate, jamón, churrasco, tocino, queso.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Kaiser II",
            'precioProducto' => 8100, 
            'RecetaProducto' => "Salsa de tomate, jamón, churrasco, queso.", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Champiñon-Aceituna",
            'precioProducto' => 4900, 
            'RecetaProducto' => "Salsa de tomate, champiñon, aceituna, .", 
            'idSubFamilia' => 7,
        ]);
        Producto::create([
            'nombreProducto' => "Vegetariana",
            'precioProducto' => 3900, 
            'RecetaProducto' => "Salsa de tomate, choclo, porotos verdes, pimentón rojo, champiñon, aceitunas, queso.", 
            'idSubFamilia' => 7,
        ]);
        //Pizza del mar
        Producto::create([
            'nombreProducto' => "Anchoa",
            'precioProducto' => 5000, 
            'RecetaProducto' => "Salsa de tomate, pechuga de pollo, queso.", 
            'idSubFamilia' => 8,
        ]);
        Producto::create([
            'nombreProducto' => "Atún",
            'precioProducto' => 4450, 
            'RecetaProducto' => "Salsa de tomate, atún, queso.", 
            'idSubFamilia' => 8,
        ]);
        Producto::create([
            'nombreProducto' => "Centolla",
            'precioProducto' => 6400, 
            'RecetaProducto' => "Salsa de tomate, carne de crustáceo, mayonesa, queso.", 
            'idSubFamilia' => 8,
        ]);
        Producto::create([
            'nombreProducto' => "Sardina",
            'precioProducto' => 3950, 
            'RecetaProducto' => "Salsa de tomate, sardina, queso.", 
            'idSubFamilia' => 8,
        ]);
        Producto::create([
            'nombreProducto' => "Pulpo",
            'precioProducto' => 5050, 
            'RecetaProducto' => "Salsa de tomate, pulpo, queso.", 
            'idSubFamilia' => 8,
        ]);
    }
}
