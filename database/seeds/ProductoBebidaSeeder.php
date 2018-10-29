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
               'nombreProducto' => "Bebidas de Máquina", 
               'precioProducto' => 1600, 
               'RecetaProducto' => "Coca-Cola, Fanta, Sprite, Coca Cola Light", 
               'idSubFamilia' => 9,
            ]);
            Producto::create([
               'nombreProducto' => "Bebidas en botella", 
               'precioProducto' => 1600, 
               'RecetaProducto' => "Agua Mineral Vital con gas o sin gas 500cc", 
               'idSubFamilia' => 9,
            ]);
            Producto::create([
               'nombreProducto' => "Tehuelche", 
               'precioProducto' => 1400, 
               'RecetaProducto' => "Limonada, Champañito, Mineral", 
               'idSubFamilia' => 9,
            ]);
            //
            Producto::create([
               'nombreProducto' => "Natural", 
               'precioProducto' => 1600, 
               'RecetaProducto' => "Ruibarbo", 
               'idSubFamilia' => 10,
            ]);
            Producto::create([
               'nombreProducto' => "Caja", 
               'precioProducto' => 1600, 
               'RecetaProducto' => "Naranja, Manzana, Piña", 
               'idSubFamilia' => 10,
            ]);
            Producto::create([
               'nombreProducto' => "Nectar", 
               'precioProducto' => 1600, 
               'RecetaProducto' => "Durazno, Damasco", 
               'idSubFamilia' => 10,
            ]);
            Producto::create([
               'nombreProducto' => "Leche Sola", 
               'precioProducto' => 900, 
               'RecetaProducto' => "", 
               'idSubFamilia' => 11,
            ]);
            Producto::create([
               'nombreProducto' => "Leche con platano", 
               'precioProducto' => 1600, 
               'RecetaProducto' => "", 
               'idSubFamilia' => 11,
            ]);
            Producto::create([
               'nombreProducto' => "Cerveza Regional", 
               'precioProducto' => 1800, 
               'RecetaProducto' => "Imperial, Maracaibo", 
               'idSubFamilia' => 12,
            ]);
            Producto::create([
               'nombreProducto' => "Cerveza Imperial Desechable", 
               'precioProducto' => 1700, 
               'RecetaProducto' => "", 
               'idSubFamilia' => 12,
            ]);
            Producto::create([
               'nombreProducto' => "Malta con Huevo", 
               'precioProducto' => 2700, 
               'RecetaProducto' => "Malta, cacao, huevo y azúcar", 
               'idSubFamilia' => 12,
            ]);
            Producto::create([
               'nombreProducto' => "Leche Malteada", 
               'precioProducto' => 3400, 
               'RecetaProducto' => "Leche, huevo, malta, cacao y azúcar", 
               'idSubFamilia' => 12,
            ]);
            Producto::create([
               'nombreProducto' => "Shop", 
               'precioProducto' => 2400, 
               'RecetaProducto' => "", 
               'idSubFamilia' => 12,
            ]);
            Producto::create([
               'nombreProducto' => "MITI-MITI o CHUFLAI", 
               'precioProducto' => 3400, 
               'RecetaProducto' => "Leche, huevo, malta, cacao y azúcar", 
               'idSubFamilia' => 12,
            ]);
            Producto::create([
               'nombreProducto' => "Café Grande", 
               'precioProducto' => 1300, 
               'RecetaProducto' => "", 
               'idSubFamilia' => 13,
            ]);
            Producto::create([
               'nombreProducto' => "Café Chico", 
               'precioProducto' => 1250, 
               'RecetaProducto' => "", 
               'idSubFamilia' => 13,
            ]);
            Producto::create([
               'nombreProducto' => "Café con Leche", 
               'precioProducto' => 1350, 
               'RecetaProducto' => "", 
               'idSubFamilia' => 13,
            ]);
            Producto::create([
               'nombreProducto' => "Té solo", 
               'precioProducto' => 950, 
               'RecetaProducto' => "", 
               'idSubFamilia' => 13,
            ]);
            Producto::create([
               'nombreProducto' => "Té con Leche", 
               'precioProducto' => 1100, 
               'RecetaProducto' => "", 
               'idSubFamilia' => 13,
            ]);
      }
}
