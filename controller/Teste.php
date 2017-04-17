<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe para testes simples
 *
 * @author Gustavo
 */
require_once 'common/Controller.php';
require_once 'common/IController.php';

//require_once ROOTPATH . '/database/generated/include_dao.php';


class Teste extends Controller implements IController {

    public function run() {

        $rs = $this->db->select(
            'artigo_noticia', 
            array(
                '[>]artigo' => ['artigo_id' => 'id'],
                '[>]artigo_metadados' => ['id' => 'artigo_id'],
                '[>]tipo_artigo' => ['artigo_metadados.tipo_artigo' => 'id'],
                '[>]unidade' => ['artigo_metadados.coordenacao' => 'id'],
            ), array(
                'artigo_metadados.data_criacao',
                'tipo_artigo.descricao(tipo)',
                'artigo.id(url_ref)',
                'unidade.sigla',
                'titulo',
                'tldr',
                'artigo.status'
            ), array(
                'LIMIT' => 8,
                'ORDER' => ['artigo.id' => 'DESC'],
                'artigo.status' => 1
            )
        );
        
//        var_dump($rs);

        foreach ($rs as $i) {
            foreach ($i as $k => $v) {
                echo $k . ': ' . $v;
                echo '<br>';
            }
            echo '<br>';
        }
    }

}
