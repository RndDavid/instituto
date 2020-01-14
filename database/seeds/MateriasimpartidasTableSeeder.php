<?php

use Illuminate\Database\Seeder;

class MateriasimpartidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(env('APP_ENV') != 'production') {
            DB::table('materiasimpartidas')->truncate();
            // Create 3 App\User instances...
            $materiasimpartidas = factory(App\Materiaimpartida::class, 20)->create();
        }
        /*
            ->each(function($materiaimpartida){
                $materiaimpartida->users()->save(factory(App\User::class, 20)->make());
                $materiaimpartida->grupos()->save(factory(App\Grupo::class, 20)->make());
                $materiaimpartida->materias()->save(factory(App\Materia::class, 20)->make());
            })
        */
    }
}
