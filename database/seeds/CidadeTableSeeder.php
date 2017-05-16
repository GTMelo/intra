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
        $cidades = [
            ['Brasília', 1],
            ['São Paulo', 2],
            ['New York', 3]
        ];

        foreach ($cidades as $cidade) {
            \App\Models\Cidade::create(
                [
                    'nome' => $cidade[0],
                    'estado_id' => $cidade[1],
                ]
            );
        }
    }
}
