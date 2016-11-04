<?php

use Illuminate\Database\Seeder;
use App\datos_persona;
use App\responsable;
class ResponsableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $encargado =  datos_persona::create([
            'nombre'=>'Marcos',
            'apellido'=>'Martinez',
            'ci'=>254494,
            'fechanacimiento'=>1988-06-13,
            'tipo_cargo'=>'2',
            'email'=>'marks88martinez@gmail.com',
            'password'=>bcrypt('123'),

        ]);
//        responsable::create([
//            'id_datos_persona'=>$encargado->id_datos_persona
//        ]);

    }
}
