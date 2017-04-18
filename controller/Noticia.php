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
    
    public function run() {
        
        $this->params = array();
        
        parent::run();
        
    }

    
}
