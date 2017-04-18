<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Controller pra página principal
 *
 * @author 02364114110
 */
require_once 'common/Controller.php';
require_once 'common/IController.php';

class Home extends Controller implements IController {

    function __construct() {

        parent::__construct();
        $this->setTemplate('home.phtml');

        
    }

    function run() {

        $this->params = array(
            'usuario' => $this->getUsuario(),
            'carrossel' => $this->getCarrossel(),
            'noticias' => $this->getNoticias(),
            'aniversariantes' => $this->getAniversariantes(),
            'paginasespeciais' => $this->getPaginasEspeciais(),
        );

        parent::run();
    }

    function getUsuario() {
        // TODO obter de SESSION
        return array(
            'nome_preferido' => 'Gustavo Ericson',
            'coordenacao' => 'DILID',
        );
    }

    function getCarrossel() {

        $rs = $this->db->select('artigo_carrossel', 
                array(
                    "[>]artigo" => ["artigo_id" => "id"],
                    "[>]artigo_metadados" => ["artigo.id" => "artigo_id"],
                    "[>]tipo_artigo" => ["artigo_metadados.tipo_artigo" => "id"]
                ), array(
                    "artigo_carrossel.id",
                    "artigo_carrossel.imagem",
                    "artigo.titulo",
                    "artigo.tldr",
                    "artigo_metadados.data_criacao",
                    "tipo_artigo.descricao(tipo_artigo)",
                    "artigo.id(url_ref)",
                ), array(
                    "LIMIT" => 5,
                    "ORDER" => ['artigo_carrossel.id' => 'DESC'],
                    "artigo.status" => 1
                )
        );

        $result = array();

        foreach ($rs as $item) {
            $a = array(
                'imagem' => 'objeto/2017/4/' . $item['imagem'],
                'titulo' => $item['titulo'],
                'tldr' => $item['tldr'],
                'url' => $item['tipo_artigo'] . '/' . $item['url_ref'],
            );

            array_push($result, $a);
        }

        return $result;
    }

    function getNoticias() {
        
        $rs = $this->db->select('lista_noticias', '*');
        
        $result = array();
        
        foreach($rs as $item){
            $a = array(
                'timestamp' => $item['data_criacao'],
                'timestamprelativo' => 'X (time) atrás',
                'coordenacao' => $item['coordenacao'],
                'url' => $item['tipo'] . '/' . $item['url_ref'],
                'titulo' => $item['titulo'],
                'tldr' => $item['tldr']
            );
            array_push($result, $a);
        }
        
        return $result;
    }

    function getAniversariantes() {
        
        $rs = $this->db->select(
                'lista_aniversariantes',
                '*'
                );
        
        $result = array();
        
        foreach($rs as $pessoa){
            $a = array(
                'nome' => $pessoa['nome_completo'],
                'data' => $pessoa['aniv'],
                'hoje' => $pessoa['hoje'],
            );
            array_push($result, $a);
        }
        
        return $result;
        
    }

    function getPaginasEspeciais() {
        return array(
            array(
                'titulo' => 'Ações de recrutamento da SAIN',
                'url' => 'pagina/Placeholder1',
            ),
            array(
                'titulo' => 'Conheça a Secretaria',
                'url' => 'pagina/Placeholder2',
            ),
            array(
                'titulo' => 'Gestão Estratégica',
                'url' => 'pagina/Placeholder3',
            ),
            array(
                'titulo' => 'Ouvidoria da SAIN',
                'url' => 'pagina/Placeholder4',
            ),
            array(
                'titulo' => 'Lista de Servidores Geral SAIN',
                'url' => 'pagina/Placeholder5',
            ),
        );
    }

}
