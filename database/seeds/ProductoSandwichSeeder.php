<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductoSandwichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //CHACAREROS
        //1
        Producto::create([
           'nombreProducto' => "Chacarero", 
           'precioProducto' => 4400, 
           'idSubFamilia' => 1,
       ]);
       	//2
        Producto::create([
           'nombreProducto' => "Chacarero Queso", 
           'precioProducto' => 5300, 
           'idSubFamilia' => 1,
       ]);
       	//3
        Producto::create([
           'nombreProducto' => "Churrasco Mayo", 
           'precioProducto' => 3750, 
           'idSubFamilia' => 1,
       ]);
       	//4
        Producto::create([
           'nombreProducto' => "Churrasco Tomate", 
           'precioProducto' => 4200, 
           'idSubFamilia' => 1,
       ]);
       	//5
        Producto::create([
           'nombreProducto' => "Churrasco Palta", 
           'precioProducto' => 4950, 
           'idSubFamilia' => 1,
       ]);
       	//6
        Producto::create([
           'nombreProducto' => "Churrasco Italiano", 
           'precioProducto' => 5400, 
           'idSubFamilia' => 1,
       ]);
       	//7
        Producto::create([
           'nombreProducto' => "Churrasco Lechuga", 
           'precioProducto' => 4000, 
           'idSubFamilia' => 1,
       ]);
    	//8
        Producto::create([
           'nombreProducto' => "Churrasco a lo pobre", 
           'precioProducto' => 4550, 
           'idSubFamilia' => 1,
       ]);

       	//LOMOS
       	//1
        Producto::create([
           'nombreProducto' => "Lomo Mayo", 
           'precioProducto' => 3400, 
           'idSubFamilia' => 2,
       ]);
       	//2
        Producto::create([
           'nombreProducto' => "Lomo Tomate", 
           'precioProducto' => 3850, 
           'idSubFamilia' => 2,
       ]);
       	//3
        Producto::create([
           'nombreProducto' => "Lomo Palta", 
           'precioProducto' => 4600, 
           'idSubFamilia' => 2,
       ]);
       	//4
        Producto::create([
           'nombreProducto' => "Lomo Italiano", 
           'precioProducto' => 5050, 
           'idSubFamilia' => 2,
       ]);
       	//5
        Producto::create([
           'nombreProducto' => "Lomo Queso", 
           'precioProducto' => 4250, 
           'idSubFamilia' => 2,
       ]);
       	//6
        Producto::create([
           'nombreProducto' => "Lomo Queso Tomate", 
           'precioProducto' => 4700, 
           'idSubFamilia' => 2,
       ]);
       	//7
        Producto::create([
           'nombreProducto' => "Lomo Queso Palta", 
           'precioProducto' => 5450, 
           'idSubFamilia' => 2,
       ]);
    	//8
        Producto::create([
           'nombreProducto' => "Lomo Queso Italiano", 
           'precioProducto' => 5900, 
           'idSubFamilia' => 2,
       ]);

       	//9
        Producto::create([
           'nombreProducto' => "Lomo a lo Pobre", 
           'precioProducto' => 5050, 
           'idSubFamilia' => 2,
       ]);

       	//BARROS
        
       	//1
        Producto::create([
           'nombreProducto' => "Barros Luco", 
           'precioProducto' => 4650, 
           'idSubFamilia' => 3,
       ]);

       	//2
        Producto::create([
           'nombreProducto' => "Barros Luco Tomate", 
           'precioProducto' => 5100, 
           'idSubFamilia' => 3,
       ]);

       	//3
        Producto::create([
           'nombreProducto' => "Barros Luco Palta", 
           'precioProducto' => 5850, 
           'idSubFamilia' => 3,
       ]);

       	//4
        Producto::create([
           'nombreProducto' => "Barros Luco Italiano", 
           'precioProducto' => 6300, 
           'idSubFamilia' => 3,
       ]);

       	//5
        Producto::create([
           'nombreProducto' => "Barros Jarpa", 
           'precioProducto' => 3700, 
           'idSubFamilia' => 3,
       ]);
        
		//6
        Producto::create([
           'nombreProducto' => "Barros Jarpa Tomate", 
           'precioProducto' => 4150, 
           'idSubFamilia' => 3,
       ]);

       	//7
        Producto::create([
           'nombreProducto' => "Barros Jarpa Palta", 
           'precioProducto' => 4900, 
           'idSubFamilia' => 3,
       ]);

       	//8
        Producto::create([
           'nombreProducto' => "Barros Jarpa Italiano", 
           'precioProducto' => 5350, 
           'idSubFamilia' => 3,
       ]);

       	//9
        Producto::create([
           'nombreProducto' => "Barros Chori", 
           'precioProducto' => 3300, 
           'idSubFamilia' => 3,
       ]);

       	//10
        Producto::create([
           'nombreProducto' => "Queso Caliente", 
           'precioProducto' => 3300, 
           'idSubFamilia' => 3,
       ]);

       	//AVES
       	//1
        Producto::create([
           'nombreProducto' => "Ave Mayo", 
           'precioProducto' => 3300, 
           'idSubFamilia' => 4,
       ]);

       	//2
        Producto::create([
           'nombreProducto' => "Ave Tomate", 
           'precioProducto' => 3750, 
           'idSubFamilia' => 4,
       ]);

       	//3
        Producto::create([
           'nombreProducto' => "Ave Palta", 
           'precioProducto' => 4500, 
           'idSubFamilia' => 4,
       ]);

       	//4
        Producto::create([
           'nombreProducto' => "Ave Italiano", 
           'precioProducto' => 4950, 
           'idSubFamilia' => 4,
       ]);

       	//5
        Producto::create([
           'nombreProducto' => "Ave Pimiento", 
           'precioProducto' => 3900, 
           'idSubFamilia' => 4,
       ]);

       	//6
        Producto::create([
           'nombreProducto' => "Ave Queso", 
           'precioProducto' => 4200, 
           'idSubFamilia' => 4,
       ]);

       	//7
        Producto::create([
           'nombreProducto' => "Ave Queso Tomate", 
           'precioProducto' => 4650, 
           'idSubFamilia' => 4,
       ]);

       	//8
        Producto::create([
           'nombreProducto' => "Ave Queso Palta", 
           'precioProducto' => 5400, 
           'idSubFamilia' => 4,
       ]);

       	//9
        Producto::create([
           'nombreProducto' => "Ave Queso Italiano", 
           'precioProducto' => 5850, 
           'idSubFamilia' => 4,
       ]);

       	//10
        Producto::create([
           'nombreProducto' => "Ave a lo Pobre", 
           'precioProducto' => 3900,
           'idSubFamilia' => 4,
       ]);

       	//ESPECIALES Y VEGETARIANOS
       	//1
        Producto::create([
           'nombreProducto' => "Dinos", 
           'precioProducto' => 10900,
           'idSubFamilia' => 5,
       ]);

       	//2
        Producto::create([
           'nombreProducto' => "Lomo Completo", 
           'precioProducto' => 7500,
           'idSubFamilia' => 5,
       ]);

       	//3
        Producto::create([
           'nombreProducto' => "York Carne", 
           'precioProducto' => 4350,
           'idSubFamilia' => 5,
       ]);

       	//4
        Producto::create([
           'nombreProducto' => "York Jamón", 
           'precioProducto' => 3500,
           'idSubFamilia' => 5,
       ]);

       	//5
        Producto::create([
           'nombreProducto' => "Vegetariano", 
           'precioProducto' => 4500,
           'idSubFamilia' => 5,
       ]);
    }
}
