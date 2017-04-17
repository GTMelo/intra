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

        $this->setTemplate('home.phtml');

        parent::__construct();
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

        $rs = $this->db->select(
            'lista_carrossel', 
            array('id', 'imagem', 'titulo', 'tldr', 'data_criacao', 'tipo_artigo', 'url_ref')
        );

        $result = array();

        foreach ($rs as $item) {
            $a = array(
                'imagem' => 'assets/image/carrossel/' . $item['imagem'],
                'titulo' => $item['titulo'],
                'tldr' => $item['tldr'],
                'url' => $item['tipo_artigo'] . '/' . $item['url_ref'],
            );

            array_push($result, $a);
        }

        return $result;
    }

    function getNoticias() {
        
        $rs = $this->db->select(
            'lista_noticias',
            array('data_criacao', 'tipo', 'url_ref', 'coordenacao', 'titulo', 'tldr')
        );
        
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
        
        $rs = $this->db->select('lista_aniversariantes', '*');
        
        $result = array();
        
        foreach($rs as $pessoa){
            $a = array(
                'nome' => $pessoa['nome_completo'],
                'data' => $pessoa['aniv'],
                'email' => $pessoa['email']
            );
            array_push($result, $a);
        }
        
        return $result;
        
    }

    function getPaginasEspeciais() {
        return array(
            array(
                'titulo' => 'exemplo de página',
                'url' => 'google.com',
            ),
            array(
                'titulo' => 'exemplo de página',
                'url' => 'google.com',
            ),
            array(
                'titulo' => 'exemplo de página',
                'url' => 'google.com',
            ),
        );
    }

}
