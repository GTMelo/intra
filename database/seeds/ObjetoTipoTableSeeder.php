<?php

use Illuminate\Database\Seeder;

class ObjetoTipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\ObjetoTipo::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $objs = [
            ['imagem', 'imagem'],
            ['pdf', 'pdf'],
            ['planilha', 'planilha'],
            ['documento', 'docword'],
            ['link', 'link'],
            ['colecao','colecao']
        ];

        foreach ($objs as $o){
            \App\Models\ObjetoTipo::create([
                'descricao' => $o[0],
                'icone' => $o[1],
            ]);
        }
    }
}
