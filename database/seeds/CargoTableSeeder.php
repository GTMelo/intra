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
            ['Assistente Técnico Administrativo', 'Administrative Assistant'],
            ['Chefe de Gabinete', 'Chief of Office'],
            ['Chefe de Divisão', 'Head of Division'],
            ['Analista de Finanças e Controle', 'Finance and Control Analyst'],
            ['Especialista em Políticas Programáticas, Gestão e Governança', 'Expert in PPGG'],
            ['ADMINistrador de SIStemas', 'Systems Administrator'],
            ['SUBSECretário', 'Deputy Secretary'],
            ['Secretário de Assuntos INternacionais', 'Secretary for International Affairs'],

        ];

        static::criaCargo($cargos);

    }

    public static function criaCargo($cargos)
    {
        foreach ($cargos as $cargo) {
            \App\Cargo::create([
                'sigla' => static::criaSigla($cargo[0]),
                'descricao_pt' => static::criaDescricao($cargo[0]),
                'descricao_en' => $cargo[1],
            ]);
        }
    }

    public static function criaSigla($name)
    {

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
