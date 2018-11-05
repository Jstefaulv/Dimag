<?php

use Illuminate\Database\Seeder;
use App\Mesa;
use App\TipoMesa;

class MesasTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        TipoMesa::create([
            'TipoMesa' => 'Normal',
        ]);

        TipoMesa::create([
            'TipoMesa' => 'Telefonico',
        ]);

        TipoMesa::create([
            'TipoMesa' => 'ParaLlevar',
        ]);

        TipoMesa::create([
            'TipoMesa' => 'Personal',
        ]);

        TipoMesa::create([
            'TipoMesa' => 'Casa',
        ]);

        TipoMesa::create([
            'TipoMesa' => 'Perdida',
        ]);

        for($i=10;$i<=51;$i++){
            Mesa::create([
                'NumeroMesa' => ($i),
                'idSector' => 1,
                'capacidad' => 1,
                'cantidad' => 0,
                'estado' => 'Disponible',
                'idTipoMesa' => 2,
            ]);
        } 

        for($i=52;$i<=79;$i++){
            Mesa::create([
                'NumeroMesa' => ($i),
                'idSector' => 2,
                'capacidad' => 1,
                'cantidad' => 0,
                'estado' => 'Disponible',
                'idTipoMesa' => 2,
            ]);
        }  

        for($i=0;$i<11;$i++){
            Mesa::create([
                'NumeroMesa' => (80+$i),
                'idSector' => 3,
                'capacidad' => 1,
                'cantidad' => 0,
                'estado' => 'Disponible',
                'idTipoMesa' => 2,
            ]);
        } 

        Mesa::create([
            'NumeroMesa' => 100,
            'idSector' => 4,
            'capacidad' => 1,
            'cantidad' => 0,
            'estado' => 'Disponible',
            'idTipoMesa' => 2,
        ]);

        Mesa::create([
            'NumeroMesa' => 200,
            'idSector' => 4,
            'capacidad' => 1,
            'cantidad' => 0,
            'estado' => 'Disponible',
            'idTipoMesa' => 3,
        ]);

        Mesa::create([
            'NumeroMesa' => 980,
            'idSector' => 4,
            'capacidad' => 4,
            'cantidad' => 0,
            'estado' => 'Disponible',
            'idTipoMesa' => 4,
        ]);

        Mesa::create([
            'NumeroMesa' => 905,
            'idSector' => 4,
            'capacidad' => 4,
            'cantidad' => 0,
            'estado' => 'Disponible',
            'idTipoMesa' => 5,
        ]);

        Mesa::create([
            'NumeroMesa' => 970,
            'idSector' => 4,
            'capacidad' => 4,
            'cantidad' => 0,
            'estado' => 'Disponible',
            'idTipoMesa' => 6,
        ]);  
    }
}
