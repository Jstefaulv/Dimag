<?php

use Illuminate\Database\Seeder;
use App\Producto;

class ProductoBebidaSeeder extends Seeder{
   /**
   * Run the database seeds.
   *
   * @return void
   */
   public function run(){
    	//Gaseosas
      Producto::create([
         'nombreProducto' => "Máquina Coca-Cola", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 9,
      ]);

      Producto::create([
         'nombreProducto' => "Máquina Coca Cola Light", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 9,
      ]); 

      Producto::create([
         'nombreProducto' => "Máquina Fanta", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 9,
      ]); 

      Producto::create([
         'nombreProducto' => "Máquina Sprite", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 9,
      ]); 

      Producto::create([
         'nombreProducto' => "Agua Mineral Vital con gas", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 9,
      ]);
      Producto::create([
         'nombreProducto' => "Agua Mineral Vital sin gas", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 9,
      ]);
      Producto::create([
         'nombreProducto' => "Tehuelche Limonada", 
         'precioProducto' => 1400,  
         'idSubFamilia' => 9,
      ]);
      Producto::create([
         'nombreProducto' => "Tehuelche Champañito", 
         'precioProducto' => 1400,  
         'idSubFamilia' => 9,
      ]);
      Producto::create([
         'nombreProducto' => "Tehuelche Mineral", 
         'precioProducto' => 1400,  
         'idSubFamilia' => 9,
      ]);
      //
      Producto::create([
         'nombreProducto' => "Natural Ruibarbo", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 10,
      ]);
      Producto::create([
         'nombreProducto' => "Caja Naranja", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 10,
      ]);
      Producto::create([
         'nombreProducto' => "Caja Manzana", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 10,
      ]);
      Producto::create([
         'nombreProducto' => "Caja Piña", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 10,
      ]);

      Producto::create([
         'nombreProducto' => "Nectar Durazno", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 10,
      ]);
      Producto::create([
         'nombreProducto' => "Nectar Damasco", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 10,
      ]);
      Producto::create([
         'nombreProducto' => "Leche Sola", 
         'precioProducto' => 900,  
         'idSubFamilia' => 11,
      ]);
      Producto::create([
         'nombreProducto' => "Leche con platano", 
         'precioProducto' => 1600,  
         'idSubFamilia' => 11,
      ]);
      Producto::create([
         'nombreProducto' => "Cerveza Regional Maracaibo", 
         'precioProducto' => 1800,  
         'idSubFamilia' => 12,
      ]);
      Producto::create([
         'nombreProducto' => "Cerveza Regional Imperial", 
         'precioProducto' => 1800,  
         'idSubFamilia' => 12,
      ]);
      Producto::create([
         'nombreProducto' => "Cerveza Imperial Desechable", 
         'precioProducto' => 1700,  
         'idSubFamilia' => 12,
      ]);
      Producto::create([
         'nombreProducto' => "Malta con Huevo", 
         'precioProducto' => 2700, 
         'idSubFamilia' => 12,
      ]);
      Producto::create([
         'nombreProducto' => "Leche Malteada", 
         'precioProducto' => 3400, 
         'idSubFamilia' => 12,
      ]);
      Producto::create([
         'nombreProducto' => "Shop", 
         'precioProducto' => 2400,  
         'idSubFamilia' => 12,
      ]);
      Producto::create([
         'nombreProducto' => "MITI-MITI o CHUFLAI", 
         'precioProducto' => 3400, 
         'idSubFamilia' => 12,
      ]);
      Producto::create([
         'nombreProducto' => "Café Grande", 
         'precioProducto' => 1300,  
         'idSubFamilia' => 13,
      ]);
      Producto::create([
         'nombreProducto' => "Café Chico", 
         'precioProducto' => 1250,  
         'idSubFamilia' => 13,
      ]);
      Producto::create([
         'nombreProducto' => "Café con Leche", 
         'precioProducto' => 1350,  
         'idSubFamilia' => 13,
      ]);
      Producto::create([
         'nombreProducto' => "Té solo", 
         'precioProducto' => 950,  
         'idSubFamilia' => 13,
      ]);
      Producto::create([
         'nombreProducto' => "Té con Leche", 
         'precioProducto' => 1100,  
         'idSubFamilia' => 13,
      ]);
   }
}
