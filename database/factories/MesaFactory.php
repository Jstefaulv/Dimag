<?php

use Faker\Generator as Faker;
use App\Mesa;

$factory->define(Mesa::class, function (Faker $faker) {
    $capacidad = array(4,8);
    $est = array('Disponible','Consumiendo','Sin Tiempo');
    $estado = $faker->randomElement($est);
    if($estado == 'Disponible'){
    	$cantidad = 0;
    }else{
    	$cantidad = $faker->numberBetween(1,4);
    }
    return [
        'idSector' => 1,
        'NumeroMesa' => $faker->numberBetween(1,300),
        'capacidad' => $faker->randomElement($capacidad),
        'cantidad' => $cantidad,
        'estado' => 'Disponible',
        'idTipoMesa' => 1,
    ];
});
