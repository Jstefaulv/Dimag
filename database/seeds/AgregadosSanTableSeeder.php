<?php

use Illuminate\Database\Seeder;
use App\Producto;

class AgregadosSanTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	//GRUPO 1
    	Producto::create(['nombreProducto' => "A. S. Carne", 'precioProducto' => 5200, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Pulpo", 'precioProducto' => 5200, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Carne de crustaceo", 'precioProducto' => 5200, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Anchoa", 'precioProducto' => 5200, 'idSubFamilia' => 16]);

    	//GRUPO 2
    	Producto::create(['nombreProducto' => "A. S. Palta", 'precioProducto' => 2000, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Atún", 'precioProducto' => 2000, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Ave", 'precioProducto' => 2000, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Sardina", 'precioProducto' => 2000, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Queso", 'precioProducto' => 2000, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Choricillo", 'precioProducto' => 2000, 'idSubFamilia' => 16]);

    	//GRUPO 3
    	Producto::create(['nombreProducto' => "A. S. Jamón", 'precioProducto' => 950, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Piña", 'precioProducto' => 950, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Tocino", 'precioProducto' => 950, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Salame", 'precioProducto' => 950, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Morrón", 'precioProducto' => 950, 'idSubFamilia' => 16]);

    	//GRUPO 4
    	Producto::create(['nombreProducto' => "A. S. Tomate", 'precioProducto' => 650, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Chorizo", 'precioProducto' => 650, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Champiñón", 'precioProducto' => 650, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Aceituna", 'precioProducto' => 650, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Espárrago", 'precioProducto' => 650, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Mayonesa", 'precioProducto' => 650, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Lechuga", 'precioProducto' => 650, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Cebolla", 'precioProducto' => 650, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Ajo", 'precioProducto' => 650, 'idSubFamilia' => 16]);
    	Producto::create(['nombreProducto' => "A. S. Salsa", 'precioProducto' => 650, 'idSubFamilia' => 16]);
    }
}
