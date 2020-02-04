<?php

use Illuminate\Database\Seeder;
use App\Respuestaprofesor;

class RespuestaprofesorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') != 'production') {
            DB::table('respuestasprofesores')->truncate();

            Respuestaprofesor::create([
                'profesor' => 1,
                'peticionesinformacion_id' => 1,
                'comportamiento' => 8,
                'nivelacademico' => 7,
                'observaciones' => 'Trabaja muy bien y se esfuerza mucho',
            ]); //id 1

            Respuestaprofesor::create([
                'profesor' => 2,
                'peticionesinformacion_id' => 2,
                'comportamiento' => 10,
                'nivelacademico' => 10,
                'observaciones' => 'Esfuerzo genial el mejor',
            ]); //id 2

            Respuestaprofesor::create([
                'profesor' => 2,
                'peticionesinformacion_id' => 3,
                'comportamiento' => 2,
                'nivelacademico' => 1,
                'observaciones' => 'No hace nada',
            ]); //id 3

            Respuestaprofesor::create([
                'profesor' => 3,
                'peticionesinformacion_id' => 4,
                'comportamiento' => 6,
                'nivelacademico' => 5,
                'observaciones' => 'Ley del minimo esfuerzo',
            ]); //id 4

            Respuestaprofesor::create([
                'profesor' => 4,
                'peticionesinformacion_id' => 5,
                'comportamiento' => 7,
                'nivelacademico' => 6,
                'observaciones' => 'Se porta bien en clase, falta estudiar mas',
            ]); //id 5


            $respuestasprofesores = factory(App\Respuestaprofesor::class, 10)->create();



        }
    }
}
