<?php

use Illuminate\Database\Seeder;

class ObjetoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Objeto::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $faker = new Faker\Generator();
        $faker->seed(123);
        $faker->addProvider(new Faker\Provider\Base($faker));

        $img = \App\Models\ObjetoTipo::idOf('imagem');
        $link = \App\Models\ObjetoTipo::idOf('link');
        $pdf = \App\Models\ObjetoTipo::idOf('pdf');

        factory(App\Models\Objeto::class, 30)->create(['objeto_tipo_id' => $img]);
        factory(App\Models\Objeto::class, 30)->create(['objeto_tipo_id' => $link]);
        factory(App\Models\Objeto::class, 30)->create(['objeto_tipo_id' => $pdf]);

    }
}
