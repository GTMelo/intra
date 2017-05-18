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

        $tipoImagem = \App\Models\ObjetoTipo::findByTipo('imagem')->pluck('id')->first();
        $faker = new Faker\Generator();
        $faker->addProvider(new \Faker\Provider\Lorem($faker));

        $objetos = [
            [$tipoImagem, 'banner1.png', $faker->text(140)],
            [$tipoImagem, 'banner2.png', $faker->text(140)],
            [$tipoImagem, 'banner3.png', $faker->text(140)],
            [$tipoImagem, 'banner4.png', $faker->text(140)],
            [$tipoImagem, 'banner5.png', $faker->text(140)],
        ];

        foreach ($objetos as $objeto) {
            \App\Models\Objeto::create([
                'objeto_tipo_id' => $objeto[0],
                'descricao' => $objeto[1],
                'tldr' => $objeto[2],
                'ativo' => true,
            ]);
        }

    }
}
