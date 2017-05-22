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
            'descricao' => 'pagina',
        ]);

        \App\Models\ArtigoTipo::create([
            'descricao' => 'noticia',
        ]);

        \App\Models\ArtigoTipo::create([
            'descricao' => 'legislacao',
        ]);
    }
}
