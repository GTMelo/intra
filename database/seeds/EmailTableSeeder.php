<?php

use Illuminate\Database\Seeder;

class EmailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Email::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $people = \App\Models\User::all()->pluck('nome_curto');

        foreach ($people as $person){
            \App\Models\Email::create([
                'email' => self::criaEmail($person),
            ]);
        }


    }

    public static function criaEmail($nome){

        $result = strtolower(str_replace(' ', '.', $nome)) . '@fazenda.gov.br';
        return $result;
    }
}
