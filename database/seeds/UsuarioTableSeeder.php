<?php

use Illuminate\Database\Seeder;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Usuario::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        (new Faker\Generator())->seed(123);

        factory(App\Models\Usuario::class, 200)->create();

    }
}
