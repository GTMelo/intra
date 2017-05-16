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
        $paises = [];

        foreach ($paises as $pais) {
            \App\Models\Pais::create([
                'nome' => $pais[0],
                ''
            ]);
        }
    }
}
