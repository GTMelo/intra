<?php

use Illuminate\Database\Seeder;

class CidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Cidade::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $cidades = [
            ['Brasília', 1, '61', true],
            ['São Paulo', 1, '11', false],
            ['New York', 2, '212', false]
        ];

        foreach ($cidades as $cidade) {
            \App\Models\Cidade::create(
                [
                    'nome' => $cidade[0],
                    'pais_id' => $cidade[1],
                    'area_code' => $cidade[2],
                    'is_capital' => $cidade[3],
                ]
            );
        }
    }
}
