<?php

use Illuminate\Database\Seeder;

class TipoArtigoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\TipoArtigo::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        \App\Models\TipoArtigo::create([
            'descricao' => 'pagina',
        ]);

        \App\Models\TipoArtigo::create([
            'descricao' => 'noticia',
        ]);

        \App\Models\TipoArtigo::create([
            'descricao' => 'legislacao',
        ]);

//        $tipos = [
//            'pagina',
//            'noticia',
//        ];
//
//        foreach($tipos as $tipo) {
//            \App\Models\TipoArtigo::create(
//                ['descricao' => $tipo]
//            );
//        }
    }
}
