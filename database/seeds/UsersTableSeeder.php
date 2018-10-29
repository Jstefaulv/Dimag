<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Rol;
use App\Local;
use App\Sector;
use App\Ciudad;
use App\Comuna;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Rol::create([
            'rol'=>'Administrador',
        ]);

         Rol::create([
            'rol'=>'Garzón',
        ]);

         Rol::create([
            'rol'=>'Caja',
        ]);

        User::create([
        	'name'=>'Administrador',
        	'email'=>'admin',
        	'password'=>bcrypt('admin'),
            'codigo'=> null,
        	'rol'=>1,
        ]);

        User::create([
            'name'=>'Juan',
            'email'=>'Juan',
            'password'=>bcrypt('123456'),
            'codigo'=> null,
            'rol'=>2,
        ]);

        User::create([
            'name'=>'Carolina',
            'email'=>'Carolina',
            'password'=>bcrypt('123456'),
            'codigo'=> null,
            'rol'=>2,
        ]);

        Ciudad::create([
            'nombreCiudad' => 'Punta Arenas',
        ],[
            'nombreCiudad' => 'Puerto Natales',
        ]);

        Comuna::create([
            'nombreComuna' => 'Punta Arenas',
            'idCiudad' => 1,
        ],[
            'nombreComuna' => 'Puerto Natales',
            'idCiudad' => 2,
        ]);

        Local::create([
            'nombreLocal'=> "Dino's Pizza",
            'direccionLocal'=> 'Calle Bories #557',
            'idComuna'=> '1',
            'personaContactoLocal'=> 'Francisco M.',
            'estadoLocal'=> '1',
            'horarioAtencionLocal'=> 'Martes a domingo 10:00 a 20:00',
        ]);

        Sector::create([
            'nombreSector' => 'Mesas',
            'nivelSector' => '1',
            'idLocal' => 1,
        ]);

        Sector::create([
            'nombreSector' => 'Barra',
            'nivelSector' => '1',
            'idLocal' => 1,
        ]);

        Sector::create([
            'nombreSector' => 'Otros',
            'nivelSector' => '1',
            'idLocal' => 1,
        ]);
    }
}
