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

        $cargR = self::pickChoice($prefixo) . self::pickChoice($radical) . self::pickChoice($sufixo);
        $prepR = self::pickChoice($preposicao);
        $objeR = self::pickChoice($objeto);
        $escoR = self::pickChoice($escopo);
        $cobeR = self::pickChoice($prefixo) . self::pickChoice($cobertura);

        $array = [$cargR, $prepR, $objeR, $escoR, $cobeR];
        $result = implode(' ', $array);

        return $result;


    }

    static function pickChoice($array){
        return $array[mt_rand(0,count($array))];
    }

}