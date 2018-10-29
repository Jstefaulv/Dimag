<?php

use Illuminate\Database\Seeder;
use App\Familia;
use App\SubFamilia;

class FamiliasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      
      Familia::create([
  			'NombreFamilia' => "Sandwiches",
  		]);
    	
    	Familia::create([
  			'NombreFamilia' => "Pizzas",
  		]);

  		Familia::create([
  			'NombreFamilia' => "Bebidas",
  		]);
      
  		Familia::create([
  			'NombreFamilia' => "Porciones",
  		]);

  		Familia::create([
  			'NombreFamilia' => "Menú",
  		]);


  		//SUBFAMILIAS SANDWICH
  		SubFamilia::create([
  			'NombreSubFamilia' => "Chacareros", 
  			'idFamilia' => 1,
  		]);
  		SubFamilia::create([
  			'NombreSubFamilia' => "Lomos", 
  			'idFamilia' => 1,
  		]);
  		SubFamilia::create([
  			'NombreSubFamilia' => "Barros", 
  			'idFamilia' => 1,
  		]);
  		SubFamilia::create([
  			'NombreSubFamilia' => "Aves", 
  			'idFamilia' => 1,
  		]);
  		SubFamilia::create([
  			'NombreSubFamilia' => "Especiales y vegetarianos", 
  			'idFamilia' => 1,
  		]);

  		//SUBFAMILIA PIZZAS

  		SubFamilia::create([
  			'NombreSubFamilia' => "Básicas", 
  			'idFamilia' => 2,
  		]);
  		SubFamilia::create([
  			'NombreSubFamilia' => "Especiales", 
  			'idFamilia' => 2,
  		]);
  		SubFamilia::create([
  			'NombreSubFamilia' => "Pizzas del mar", 
  			'idFamilia' => 2,
  		]);
  		
  		//SUBFAMILIA BEBIDAS
  		SubFamilia::create([
  			'NombreSubFamilia' => "Gaseosas", 
  			'idFamilia' => 3,
  		]);

  		SubFamilia::create([
  			'NombreSubFamilia' => "Jugos", 
  			'idFamilia' => 3,
  		]);

  		SubFamilia::create([
  			'NombreSubFamilia' => "Lácteos", 
  			'idFamilia' => 3,
  		]);

  		SubFamilia::create([
  			'NombreSubFamilia' => "Cervezas", 
  			'idFamilia' => 3,
  		]);

  		SubFamilia::create([
  			'NombreSubFamilia' => "Bebidas calientes", 
  			'idFamilia' => 3,
  		]);

  		//SUBFAMILIA PORCIONES
  		SubFamilia::create([
  			'NombreSubFamilia' => "Porciones", 
  			'idFamilia' => 4,
  		]);

  		//SUBFAMILIA MENÚ
  		SubFamilia::create([
  			'NombreSubFamilia' => "Menú", 
  			'idFamilia' => 5,
  		]);
    }
}
