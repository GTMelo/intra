<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Controller pra página que mostra um artigo do tipo Notícia
 *
 * @author 02364114110
 */
require_once 'common/Controller.php';
require_once 'common/IController.php';

class Noticia extends Controller implements IController {

    function __construct() {

        parent::__construct();
        $this->setTemplate('noticia.phtml');
    }

    public function getNoticia($id) {
        return array(
            'titulo' => 'teste título',
            'unidade' => 'NTIC',
            'unidade_id' => '1',
            'url_unidade' => 'urldaunidaeaqui',
            'url_colecao' => 'Notícias',
            'metadados' => 'metadados aqui',
            'conteudo' => 'lorem ipsum whatever',
        );
    }

    public function getMenuUnidade($id) {
        return array(
            array(
                'url' => 'google.com',
                'descricao' => 'Descrição do google'
            ),
            array(
                'url' => 'google.com',
                'descricao' => 'Descrição do google'
            ),
            array(
                'url' => 'google.com',
                'descricao' => 'Descrição do google'
            ),
        );
    }

    public function getNoticiasAnteriores() {
        return array(
            array(
                'url' => 'google.com',
                'descricao' => 'Descrição do google'
            ),
            array(
                'url' => 'google.com',
                'descricao' => 'Descrição do google'
            ),
            array(
                'url' => 'google.com',
                'descricao' => 'Descrição do google'
            ),
        );
    }
    
    public function run() {

        global $_GET;

        $this->params['noticia'] = $this->getNoticia($_GET['id']);
        $this->params['menu_unidade'] = $this->getMenuUnidade($this->params['noticia']['unidade_id']);
        $this->params['noticias_anteriores'] = $this->getNoticiasAnteriores($this->params['noticia']['unidade_id']);

        parent::run();
    }

}
