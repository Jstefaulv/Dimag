<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(MesasTableSeeder::class);
        $this->call(FamiliasTableSeeder::class);
        $this->call(ProductoSandwichSeeder::class);
        $this->call(ProductoPizzaSeeder::class);
        $this->call(ProductoBebidaSeeder::class);
        $this->call(AgregadosTableSeeder::class);
        $this->call(EstadoPedidoTableSeeder::class);
        /*Estados de pedido {'En espera','Comiendo','Sin Tiempo','Pagado'}*/
    }
}
