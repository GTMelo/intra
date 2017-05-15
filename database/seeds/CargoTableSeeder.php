<?php

use Illuminate\Database\Seeder;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Cargo::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $cargos = [
            ['ATA', 'Assistente Técnico Administrativo', 'Administrative Assistant'],
            ['CGAB', 'Chefe de Gabinete', 'Chief of Office'],
            ['CD', 'Chefe de Divisão', 'Head of Division'],
            ['AFC', 'Analista de Finanças e Controle', 'Finance and Control Analyst'],
            ['EPPGG', 'Especialista em Políticas Programáticas, Gestão e Governança', 'PPGG Especialist'],
            ['Sisadmin', 'Administrador de Sistemas', 'Systems Administrator'],
            ['Subsec', 'Subsecretário', 'Deputy Secretary'],
            ['SAIN', 'Secretário de Assuntos Internacionais', 'Secretary for International Affairs'],

        ];

        static::criaCargo($cargos);

    }

    public static function criaCargo($cargos)
    {
        foreach ($cargos as $cargo) {
            \App\Models\Cargo::create([
                'sigla' => $cargo[0],
                'descricao' => $cargo[1],
                'descricao_en' => $cargo[2],
                'ativo' => true,
            ]);
        }
    }

//    public static function criaSigla($name)
//    {
//
//        $sigla = preg_replace('/[^A-Z ]/', '', $name);
//        $sigla = str_replace(' ', '', $sigla);
//
//        return strtoupper($sigla);
//    }
//
//    public static function criaDescricao($name)
//    {
//
//        $a = explode(' ', $name);
//
//        $palavrasRuins = ['e', 'de', 'da', 'do', 'a', 'o', 'para', 'pro', 'pra', 'em'];
//
//        $result = [];
//
//        foreach ($a as $word) {
//
//            $word = strtolower($word);
//            if (!in_array($word, $palavrasRuins)) {
//                $word = ucwords($word);
//                array_push($result, $word);
//            } else {
//                array_push($result, $word);
//            }
//        }
//
//        return implode(' ', $result);
//
//    }
}
