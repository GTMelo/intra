<?php

use Illuminate\Database\Seeder;

class UsuarioRHTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\UsuarioRH::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        (new Faker\Generator)->seed(123);

        $numUsers = \App\Models\Usuario::all()->count();

        factory(App\Models\UsuarioRH::class, $numUsers)->create();
    }
}
