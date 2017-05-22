<?php

use Illuminate\Database\Seeder;

class ArtigoContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\ArtigoContent::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        //

        $noticias = \App\Models\ArtigoTipo::findByTipo('noticia');
        $ct = $noticias->pluck('id');

        $faker = new Faker\Generator();
        $faker->addProvider(new Faker\Provider\en_US\Text($faker));


        foreach ($ct as $item) {
            DB::table('artigo_contents')->insert([
                'artigo_id' => $item,
                'conteudo' => $faker->realText(),
            ]);
        }
    }
}
