<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder{
    /**
    * Seed the application's database.
    *
    * @return void
    */
    public function run(){
        $this->call(UsersTableSeeder::class);
        $this->call(MesasTableSeeder::class);
        $this->call(EstadoPedidoTableSeeder::class);
        $this->call(IngredientesTableSeeder::class);
        
        $this->call(FamiliasTableSeeder::class);
        $this->call(ProductoSandwichSeeder::class);
        $this->call(ProductoPizzaISeeder::class);
        $this->call(ProductoBebidaSeeder::class);
        $this->call(PorcionesTableSeeder::class);
        
        $this->call(AgregadosSanTableSeeder::class);
        $this->call(AgregadosPITableSeeder::class);
        $this->call(AgregadosPGTableSeeder::class);
        

        $this->call(MensajesTableSeeder::class);
    }
}
