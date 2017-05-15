<?php

use Illuminate\Database\Seeder;

class EscolaridadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Escolaridade::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $escolaridades = [
            'Ensino Fundamental',
            'Ensino Médio',
            'Ensino Superior Incompleto',
            'Ensino Superior Completo'
        ];

        foreach($escolaridades as $esc) {
            \App\Models\Escolaridade::create([
                'descricao' => $esc,
            ]);
        }

    }
}
