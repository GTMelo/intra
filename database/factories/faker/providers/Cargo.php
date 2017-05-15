<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 11/05/2017
 * Time: 12:19
 */

namespace Faker\Provider;


class Cargo extends \Faker\Provider\Base {

    protected static $cargo;

    public function cargo(){

        return static::genCargo();

    }

    static function genCargo(){

        $prefixo = [
            '',
            'super',
            'sub',
            'extra',
            'intra',
            'inter',
            'vice',
        ];

        $radical = [
            'chefe',
            'diretor',
            'presidente',
            'assistente',
            'secretário',
            'técnico',
            'especialista',
            'analista',
            'auditor',
            'administrador',
        ];

        $sufixo = [
            '',
            '-chefe',
            '-assistente',
            '-complementar',
        ];

        $preposicao = [
            'de',
            'para'
        ];

        $objeto = [
            'assuntos',
            'sistemas',
            'mercados',
            'regiões',
            'temas',
            'finanças',
            'estatégias',
        ];

        $escopo = [
            '',
            'financeiros',
            'econômicos',
            'cibernéticos',
            'estratégicos',
            'comportamentais',
        ];

        $cobertura = [
            'locais',
            'municipais',
            'distritais',
            'estaduais',
            'regionais',
            'nacionais',
            'internacionais'
        ];

        $cargR = self::opt($prefixo) . self::opt($radical) . self::opt($sufixo);
        $prepR = self::opt($preposicao);
        $objeR = self::opt($objeto);
        $escoR = self::opt($escopo);
        $cobeR = self::opt($prefixo) . self::opt($cobertura);

        $array = [$cargR, $prepR, $objeR, $escoR, $cobeR];
        $result = implode(' ', $array);

        return $result;


    }

    static function opt
    ($array)
    {
        return $array[mt_rand(0,count($array))];
    }

}