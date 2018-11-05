<?php

use Illuminate\Database\Seeder;
use App\Ingrediente;

class IngredientesTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
    	Ingrediente::create(['ingrediente' => 'Churrasco']);
    	Ingrediente::create(['ingrediente' => 'Tomate']);
    	Ingrediente::create(['ingrediente' => 'Lechuga']);
    	Ingrediente::create(['ingrediente' => 'Mayonesa']);
    	Ingrediente::create(['ingrediente' => 'Queso']);
    	Ingrediente::create(['ingrediente' => 'Palta']);
    	Ingrediente::create(['ingrediente' => 'Huevo']);
    	Ingrediente::create(['ingrediente' => 'Cebolla']);
    	Ingrediente::create(['ingrediente' => 'Lomo Cerdo']);
    	Ingrediente::create(['ingrediente' => 'Jamón']);
    	Ingrediente::create(['ingrediente' => 'Chorizo']);
    	Ingrediente::create(['ingrediente' => 'Pechuga de pollo']);
    	Ingrediente::create(['ingrediente' => 'Pimiento']);
    	Ingrediente::create(['ingrediente' => 'Choricillo']);
    	Ingrediente::create(['ingrediente' => 'Salame']);
    	Ingrediente::create(['ingrediente' => 'Tocino']);
    	Ingrediente::create(['ingrediente' => 'Salsa de tomate']);
    	Ingrediente::create(['ingrediente' => 'Orégano']);
    	Ingrediente::create(['ingrediente' => 'Tomate natural']);
    	Ingrediente::create(['ingrediente' => 'Espárrago']);
    	Ingrediente::create(['ingrediente' => 'Champiñón enlatado']);
    	Ingrediente::create(['ingrediente' => 'Aceitunas negras amargas']);
    	Ingrediente::create(['ingrediente' => 'Carne de crustacio']);
    	Ingrediente::create(['ingrediente' => 'Salsa golf']);
    	Ingrediente::create(['ingrediente' => 'Marrasquino']);
    	Ingrediente::create(['ingrediente' => 'Cebolla a la pluma']);
    	Ingrediente::create(['ingrediente' => 'Carne en tuco']);
    	Ingrediente::create(['ingrediente' => 'Choclo']);
    	Ingrediente::create(['ingrediente' => 'Porotos verdes']);
    	Ingrediente::create(['ingrediente' => 'Pimenton Rojo']);
    	Ingrediente::create(['ingrediente' => 'Filete de anchoas admiral']);
    	Ingrediente::create(['ingrediente' => 'Atún']);
    	Ingrediente::create(['ingrediente' => 'Sardina']);
    	Ingrediente::create(['ingrediente' => 'Pulpo']);
    	Ingrediente::create(['ingrediente' => 'Leche']);
    	Ingrediente::create(['ingrediente' => 'Malta']);
    	Ingrediente::create(['ingrediente' => 'Cacao']);
    	Ingrediente::create(['ingrediente' => 'Azúcar']);
    }
}
