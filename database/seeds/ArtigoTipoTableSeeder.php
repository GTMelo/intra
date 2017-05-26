<?php

use Illuminate\Database\Seeder;

class ArtigoTipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\ArtigoTipo::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        \App\Models\ArtigoTipo::create([
            'internal_code' => 'pagina',
            'human_code' => 'Páginas'
        ]);

        \App\Models\ArtigoTipo::create([
            'internal_code' => 'noticia',
            'human_code' => 'Notícias'
        ]);

        \App\Models\ArtigoTipo::create([
            'internal_code' => 'legislacao',
            'human_code' => 'Legislação'
        ]);
    }
}
