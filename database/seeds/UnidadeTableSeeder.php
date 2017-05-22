<?php

use Illuminate\Database\Seeder;

class UnidadeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\Models\Unidade::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $unds = [
            ['SAIN', 'Secretaria de Assuntos Internacionais', null],
            ['CGAB', 'Chefia de Gabinete', 1],
            ['DILID', 'Divisão de Logística, Informática e Documentação', 2],
            ['NTIC', 'Núcleo de Tecnologia da Informação e Comunicação', 3],
            ['NDI', 'Núcleo de Documentação da Informação', 3],
            ['NLOG', 'Núcleo de Logística e Gestão', 3],
        ];

        foreach ($unds as $unidade) {
            \App\Models\Unidade::create([
                    'sigla' => $unidade[0],
                    'descricao' => $unidade[1],
                    'unidade_superior_id' => $unidade[2],
                    'ativo' => true
                ]
            );
        }
    }

    public static function getSuperior($unidade = false)
    {

        if ($unidade == false) {
            return null;
        }

        return \App\Models\Unidade::where('sigla', $unidade)->first()->id;

    }


}
