<?php

use Illuminate\Database\Seeder;

class RhDadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\RhDado::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        (new Faker\Generator)->seed(123);

        $numUsers = \App\Models\Usuario::all()->count();

        factory(App\Models\RhDado::class, $numUsers)->create();
    }
}
