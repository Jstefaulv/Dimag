<?php

use Illuminate\Database\Seeder;
use App\EstadoPedido;

class EstadoPedidoTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
     	EstadoPedido::create([
     		'EstadoPedido' => 'Activo',
     	]);
     	EstadoPedido::create([
     		'EstadoPedido' => 'Produccion',
     	]);
     	EstadoPedido::create([
     		'EstadoPedido' => 'Consumo',
     	]);
     	EstadoPedido::create([
     		'EstadoPedido' => 'Pagado',
     	]);
	}
}
