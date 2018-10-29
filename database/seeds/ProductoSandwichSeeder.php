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
           'RecetaProducto' => "Churrasco, Tomate, Lechuga, Mayonesa", 
           'idSubFamilia' => 1,
       ]);
       	//2
        Producto::create([
           'nombreProducto' => "Chacarero Queso", 
           'precioProducto' => 5300, 
           'RecetaProducto' => "Queso, Churrasco, Tomate, Lechuga, Mayonesa, Queso", 
           'idSubFamilia' => 1,
       ]);
       	//3
        Producto::create([
           'nombreProducto' => "Churrasco Mayo", 
           'precioProducto' => 3750, 
           'RecetaProducto' => "Churrasco, Mayonesa", 
           'idSubFamilia' => 1,
       ]);
       	//4
        Producto::create([
           'nombreProducto' => "Churrasco Tomate", 
           'precioProducto' => 4200, 
           'RecetaProducto' => "Churrasco, Tomate, Mayonesa", 
           'idSubFamilia' => 1,
       ]);
       	//5
        Producto::create([
           'nombreProducto' => "Churrasco Palta", 
           'precioProducto' => 4950, 
           'RecetaProducto' => "Churrasco, Palta, Mayonesa", 
           'idSubFamilia' => 1,
       ]);
       	//6
        Producto::create([
           'nombreProducto' => "Churrasco Italiano", 
           'precioProducto' => 5400, 
           'RecetaProducto' => "Churrasco, Palta, Tomate, Mayonesa", 
           'idSubFamilia' => 1,
       ]);
       	//7
        Producto::create([
           'nombreProducto' => "Churrasco Lechuga", 
           'precioProducto' => 4000, 
           'RecetaProducto' => "Churrasco, Lechuga, Mayonesa", 
           'idSubFamilia' => 1,
       ]);
    	//8
        Producto::create([
           'nombreProducto' => "Churrasco a lo pobre", 
           'precioProducto' => 4550, 
           'RecetaProducto' => "Churrasco, Huevo, Cebolla, Mayonesa", 
           'idSubFamilia' => 1,
       ]);

       	//LOMOS
       	//1
        Producto::create([
           'nombreProducto' => "Lomo Mayo", 
           'precioProducto' => 3400, 
           'RecetaProducto' => "Lomo cerdo, mayonesa", 
           'idSubFamilia' => 2,
       ]);
       	//2
        Producto::create([
           'nombreProducto' => "Lomo Tomate", 
           'precioProducto' => 3850, 
           'RecetaProducto' => "Lomo cerdo, tomate, mayonesa", 
           'idSubFamilia' => 2,
       ]);
       	//3
        Producto::create([
           'nombreProducto' => "Lomo Palta", 
           'precioProducto' => 4600, 
           'RecetaProducto' => "Lomo cerdo, palta, mayonesa", 
           'idSubFamilia' => 2,
       ]);
       	//4
        Producto::create([
           'nombreProducto' => "Lomo Italiano", 
           'precioProducto' => 5050, 
           'RecetaProducto' => "Lomo cerdo, palta, tomate, mayonesa", 
           'idSubFamilia' => 2,
       ]);
       	//5
        Producto::create([
           'nombreProducto' => "Lomo Queso", 
           'precioProducto' => 4250, 
           'RecetaProducto' => "Queso, lomo cerdo, mayonesa, queso", 
           'idSubFamilia' => 2,
       ]);
       	//6
        Producto::create([
           'nombreProducto' => "Lomo Queso Tomate", 
           'precioProducto' => 4700, 
           'RecetaProducto' => "Queso, lomo cerdo, tomate, mayonesa, queso", 
           'idSubFamilia' => 2,
       ]);
       	//7
        Producto::create([
           'nombreProducto' => "Lomo Queso Palta", 
           'precioProducto' => 5450, 
           'RecetaProducto' => "Queso, lomo cerdo, palta, mayonesa, queso", 
           'idSubFamilia' => 2,
       ]);
    	//8
        Producto::create([
           'nombreProducto' => "Lomo Queso Italiano", 
           'precioProducto' => 5900, 
           'RecetaProducto' => "Queso, lomo cerdo, palta, tomate, mayonesa, queso", 
           'idSubFamilia' => 2,
       ]);

       	//9
        Producto::create([
           'nombreProducto' => "Lomo a lo Probre", 
           'precioProducto' => 5050, 
           'RecetaProducto' => "Lomo cerdo, huevo, cebolla, mayonesa", 
           'idSubFamilia' => 2,
       ]);

       	//BARROS
        
       	//1
        Producto::create([
           'nombreProducto' => "Barros Luco", 
           'precioProducto' => 4650, 
           'RecetaProducto' => "Queso, churrasco, mayonesa, queso", 
           'idSubFamilia' => 3,
       ]);

       	//2
        Producto::create([
           'nombreProducto' => "Barros Luco Tomate", 
           'precioProducto' => 5100, 
           'RecetaProducto' => "Queso, churrasco, tomate, mayonesa, queso", 
           'idSubFamilia' => 3,
       ]);

       	//3
        Producto::create([
           'nombreProducto' => "Barros Luco Palta", 
           'precioProducto' => 5850, 
           'RecetaProducto' => "Queso, churrasco, palta, mayonesa, queso", 
           'idSubFamilia' => 3,
       ]);

       	//4
        Producto::create([
           'nombreProducto' => "Barros Luco Italiano", 
           'precioProducto' => 6300, 
           'RecetaProducto' => "Queso, churrasco, palta, tomate, mayonesa, queso", 
           'idSubFamilia' => 3,
       ]);

       	//5
        Producto::create([
           'nombreProducto' => "Barros Jarpa", 
           'precioProducto' => 3700, 
           'RecetaProducto' => "Queso, jamón, mayonesa, queso", 
           'idSubFamilia' => 3,
       ]);
        
		//6
        Producto::create([
           'nombreProducto' => "Barros Jarpa Tomate", 
           'precioProducto' => 4150, 
           'RecetaProducto' => "Queso, jamón, tomate, mayonesa, queso", 
           'idSubFamilia' => 3,
       ]);

       	//7
        Producto::create([
           'nombreProducto' => "Barros Jarpa Palta", 
           'precioProducto' => 4900, 
           'RecetaProducto' => "Queso, jamón, palta, mayonesa, queso", 
           'idSubFamilia' => 3,
       ]);

       	//8
        Producto::create([
           'nombreProducto' => "Barros Jarpa Italiano", 
           'precioProducto' => 5350, 
           'RecetaProducto' => "Queso, jamón, palta, tomate, mayonesa, queso", 
           'idSubFamilia' => 3,
       ]);

       	//9
        Producto::create([
           'nombreProducto' => "Barros Chori", 
           'precioProducto' => 3300, 
           'RecetaProducto' => "Chorizo, mayonesa, queso", 
           'idSubFamilia' => 3,
       ]);

       	//10
        Producto::create([
           'nombreProducto' => "Queso Caliente", 
           'precioProducto' => 3300, 
           'RecetaProducto' => "Queso, mayonesa, queso", 
           'idSubFamilia' => 3,
       ]);

       	//AVES
       	//1
        Producto::create([
           'nombreProducto' => "Ave Mayo", 
           'precioProducto' => 3300, 
           'RecetaProducto' => "Pechuga de pollo, mayonesa", 
           'idSubFamilia' => 4,
       ]);

       	//2
        Producto::create([
           'nombreProducto' => "Ave Tomate", 
           'precioProducto' => 3750, 
           'RecetaProducto' => "Pechuga de pollo, tomate, mayonesa", 
           'idSubFamilia' => 4,
       ]);

       	//3
        Producto::create([
           'nombreProducto' => "Ave Palta", 
           'precioProducto' => 4500, 
           'RecetaProducto' => "Pechuga de pollo, palta, mayonesa", 
           'idSubFamilia' => 4,
       ]);

       	//4
        Producto::create([
           'nombreProducto' => "Ave Italiano", 
           'precioProducto' => 4950, 
           'RecetaProducto' => "Pechuga de pollo, tomate, palta, mayonesa", 
           'idSubFamilia' => 4,
       ]);

       	//5
        Producto::create([
           'nombreProducto' => "Ave Pimiento", 
           'precioProducto' => 3900, 
           'RecetaProducto' => "Pechuga de pollo, pimiento, mayonesa", 
           'idSubFamilia' => 4,
       ]);

       	//6
        Producto::create([
           'nombreProducto' => "Ave Queso", 
           'precioProducto' => 4200, 
           'RecetaProducto' => "Queso, pechuga de pollo, mayonesa, queso", 
           'idSubFamilia' => 4,
       ]);

       	//7
        Producto::create([
           'nombreProducto' => "Ave Queso Tomate", 
           'precioProducto' => 4650, 
           'RecetaProducto' => "Queso, pechuga de pollo, tomate, mayonesa, queso", 
           'idSubFamilia' => 4,
       ]);

       	//8
        Producto::create([
           'nombreProducto' => "Ave Queso Palta", 
           'precioProducto' => 5400, 
           'RecetaProducto' => "Queso, pechuga de pollo, palta, mayonesa, queso", 
           'idSubFamilia' => 4,
       ]);

       	//9
        Producto::create([
           'nombreProducto' => "Ave Queso Italiano", 
           'precioProducto' => 5850, 
           'RecetaProducto' => "Queso, pechuga de pollo, palta, tomate, mayonesa, queso", 
           'idSubFamilia' => 4,
       ]);

       	//10
        Producto::create([
           'nombreProducto' => "Ave a lo Pobre", 
           'precioProducto' => 3900,
           'RecetaProducto' => "Pechuga de pollo, huevo, cebolla, mayonesa", 
           'idSubFamilia' => 4,
       ]);

       	//ESPECIALES Y VEGETARIANOS
       	//1
        Producto::create([
           'nombreProducto' => "Dino's", 
           'precioProducto' => 10900,
           'RecetaProducto' => "Queso, jamón, churrasco, palta, lechuga, tomate, churrasco, mayonesa, chorizo", 
           'idSubFamilia' => 5,
       ]);

       	//2
        Producto::create([
           'nombreProducto' => "Lomo Completo", 
           'precioProducto' => 7500,
           'RecetaProducto' => "Queso, lomo cerdo, tomate, lechuga, palta, jamón, mayonesa, queso", 
           'idSubFamilia' => 5,
       ]);

       	//3
        Producto::create([
           'nombreProducto' => "York Carne", 
           'precioProducto' => 4350,
           'RecetaProducto' => "Churrasco, huevo, mayonesa", 
           'idSubFamilia' => 5,
       ]);

       	//4
        Producto::create([
           'nombreProducto' => "York Jamón", 
           'precioProducto' => 3500,
           'RecetaProducto' => "Jamón, huevo, mayonesa", 
           'idSubFamilia' => 5,
       ]);

       	//5
        Producto::create([
           'nombreProducto' => "Vegetariano", 
           'precioProducto' => 4500,
           'RecetaProducto' => "Queso, palta, lechuga, tomate, queso", 
           'idSubFamilia' => 5,
       ]);
    }
}
