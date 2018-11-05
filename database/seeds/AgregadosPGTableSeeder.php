<?php

use Illuminate\Database\Seeder;
use App\Producto;

class AgregadosPGTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //GRUPO 1
    	Producto::create(['nombreProducto' => "A.P.G. Carne", 'precioProducto' => 11600, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Pulpo", 'precioProducto' => 11600, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Carne de crustaceo", 'precioProducto' => 11600, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Anchoa", 'precioProducto' => 11600, 'idSubFamilia' => 18]);

    	//GRUPO 2
    	Producto::create(['nombreProducto' => "A.P.G. Palta", 'precioProducto' => 4000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Atún", 'precioProducto' => 4000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Ave", 'precioProducto' => 4000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Sardina", 'precioProducto' => 4000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Choricillo", 'precioProducto' => 4000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Piña", 'precioProducto' => 4000, 'idSubFamilia' => 18]);

    	//GRUPO 3
    	Producto::create(['nombreProducto' => "A.P.G. Chorizo", 'precioProducto' => 3200, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Espárrago", 'precioProducto' => 3200, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Champiñón", 'precioProducto' => 3200, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Aceituna", 'precioProducto' => 3200, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Salame", 'precioProducto' => 3200, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Tocino", 'precioProducto' => 3200, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Queso", 'precioProducto' => 3200, 'idSubFamilia' => 18]);

    	//GRUPO 4
    	Producto::create(['nombreProducto' => "A.P.G. Jamón", 'precioProducto' => 2000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Huevo", 'precioProducto' => 2000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Tomate", 'precioProducto' => 2000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Morrón", 'precioProducto' => 2000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Cebolla", 'precioProducto' => 2000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Mayonesa", 'precioProducto' => 2000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Lechuga", 'precioProducto' => 2000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Ajo", 'precioProducto' => 2000, 'idSubFamilia' => 18]);
    	Producto::create(['nombreProducto' => "A.P.G. Salsa", 'precioProducto' => 2000, 'idSubFamilia' => 18]);
    }
}

