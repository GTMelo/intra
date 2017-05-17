<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paises = [
            ['Brasil', 'Brasil', 55],
            ['Estados Unidos', 'United States', 1],
        ];

        foreach ($paises as $pais) {
            \App\Models\Pais::create([
                'nome' => $pais[0],
                'nome_nativo' => $pais[1],
                'calling_code' => $pais[2],
            ]);
        }
    }
}
