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
        \App\Models\Artigo::truncate();

        (new Faker\Generator)->seed(123);

        factory(App\Models\Artigo::class, 1000)->create();
    }
}
