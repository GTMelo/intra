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
        $cargos = [
            'Assistente Técnico Administrativo',
            'Chefe de Gabinete',
            'Chefe de Divisão',
            'Analista de Finanças e Controle',
            'Especialista em Políticas Programáticas, Gestão e Governança',
            'ADMINistrador de SIStemas',
            'SUBSECretário',
            'Secretário de Assuntos INternacionais',

        ];

        static::criaCargo($cargos);

    }

    public static function criaCargo($cargos)
    {
        foreach ($cargos as $cargo) {
            \App\Cargo::create([
                'sigla' => static::criaSigla($cargo),
                'descricao' => static::criaDescricao($cargo)
            ]);
        }
    }

    public static function criaSigla($name)
    {
//        $a = explode(' ', $name);
//
//        $palavrasRuins = ['e', 'de', 'da', 'do', 'a', 'o', 'para', 'pro', 'pra', 'em'];
//
//        $sigla = '';
//
//        foreach ($a as $word) {
//            if (!in_array($word, $palavrasRuins)) {
//                $letra = substr($word, 0, 1);
//                $sigla = $sigla . $letra;
//            }
//        }

        $sigla = preg_replace('/[^A-Z ]/', '', $name);
        $sigla = str_replace(' ', '', $sigla);

        return strtoupper($sigla);
    }

    public static function criaDescricao($name)
    {

        $a = explode(' ', $name);

        $palavrasRuins = ['e', 'de', 'da', 'do', 'a', 'o', 'para', 'pro', 'pra', 'em'];

        $result = [];

        foreach ($a as $word) {

            $word = strtolower($word);
            if (!in_array($word, $palavrasRuins)) {
                $word = ucwords($word);
                array_push($result, $word);
            } else {
                array_push($result, $word);
            }
        }

        return implode(' ', $result);

    }
}
