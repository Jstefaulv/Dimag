<?php

use Illuminate\Database\Seeder;
use App\Producto;

class AgregadosPITableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //GRUPO 1
    	Producto::create(['nombreProducto' => "A.P.I. Carne", 'precioProducto' => 5800, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Pulpo", 'precioProducto' => 5800, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Carne de crustaceo", 'precioProducto' => 5800, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Anchoa", 'precioProducto' => 5800, 'idSubFamilia' => 17]);

    	//GRUPO 2
    	Producto::create(['nombreProducto' => "A.P.I. Palta", 'precioProducto' => 2000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Atún", 'precioProducto' => 2000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Ave", 'precioProducto' => 2000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Sardina", 'precioProducto' => 2000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Choricillo", 'precioProducto' => 2000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Piña", 'precioProducto' => 2000, 'idSubFamilia' => 17]);

    	//GRUPO 3
    	Producto::create(['nombreProducto' => "A.P.I. Chorizo", 'precioProducto' => 1600, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Espárrago", 'precioProducto' => 1600, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Champiñón", 'precioProducto' => 1600, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Aceituna", 'precioProducto' => 1600, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Salame", 'precioProducto' => 1600, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Tocino", 'precioProducto' => 1600, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Queso", 'precioProducto' => 1600, 'idSubFamilia' => 17]);

    	//GRUPO 4
    	Producto::create(['nombreProducto' => "A.P.I. Jamón", 'precioProducto' => 1000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Huevo", 'precioProducto' => 1000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Tomate", 'precioProducto' => 1000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Morrón", 'precioProducto' => 1000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Cebolla", 'precioProducto' => 1000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Mayonesa", 'precioProducto' => 1000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Lechuga", 'precioProducto' => 1000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Ajo", 'precioProducto' => 1000, 'idSubFamilia' => 17]);
    	Producto::create(['nombreProducto' => "A.P.I. Salsa", 'precioProducto' => 1000, 'idSubFamilia' => 17]);
    }
}
