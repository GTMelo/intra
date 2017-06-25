<?php

use Illuminate\Database\Seeder;

class ArtigoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Artigo::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        (new Faker\Generator)->seed(123);

        factory(App\Models\Artigo::class, 1000)->create();
    }
}
