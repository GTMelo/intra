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
            ['SAIN', 'Secretaria de Assuntos Internacionais', static::getSuperior()],
            ['CGAB', 'Chefia de Gabinete', static::getSuperior('SAIN')],
            ['DILID', 'Divisão de Logística, Informática e Documentação', static::getSuperior('CGAB')],
            ['NTIC', 'Núcleo de Tecnologia da Informação e Comunicação', static::getSuperior('DILID')],
            ['NDI', 'Núcleo de Documentação da Informação', static::getSuperior('DILID')],
            ['NLOG', 'Núcleo de Logística e Gestão', static::getSuperior('DILID')]
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

    public static function getSuperior($unidade = 0)
    {

        if ($unidade == 0) {
            return null;
        }

        return \App\Models\Unidade::where('sigla', 'LIKE', $unidade)->first()->id;


    }


}
