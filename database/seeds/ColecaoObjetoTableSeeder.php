<?php

use Illuminate\Database\Seeder;

class ColecaoObjetoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::statement('TRUNCATE colecao_objeto;');
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $col = \App\Models\Colecao::first();
        $obj = \App\Models\Objeto::all()->take(10);

        foreach ($obj as $o) {
            $col->objetos()->attach($o);
        }


    }
}
