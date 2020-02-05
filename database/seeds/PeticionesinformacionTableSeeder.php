<?php

use Illuminate\Database\Seeder;

class PeticionesinformacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(env('APP_ENV') != 'production') {
            DB::table('peticionesinformacion')->truncate();
            // Create 20 App\Materiaimpartida instances...
            $peticionesinformacion = factory(App\Peticioninformacion::class, 20)->create()

                //TODO relacion con tablas user y respuestasprofesores
                /*
                ->each(function ($materiaimpartida) {
                    $materiaimpartida->tutorGrupoObject()->save(factory(App\User::class)->make());
                    $materiaimpartida->alumnoObject()->save(factory(App\User::class)->make());
                });
                */
            ;
        }
    }
}
