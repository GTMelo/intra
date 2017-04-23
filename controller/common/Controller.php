<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controllerClass
 *
 * @author Gustavo
 */
abstract class Controller {

    public $template;
    public $twig;
    public $params;
    public $db;
    
    function setTemplate($template) {
        $this->template = $template;
    }

    
    function __construct() {
        
        require_once DATABASEPATH . 'common/Conexao.php';
        require_once ASSETSPATH . 'lib/Twig/Autoloader.php';
        require_once CONFIGPATH . 'config.php';
        
        $this->template = 'home.phtml';
        $this->db = Conexao::getInstance();
        
        $this->params = array();
        $this->params['basepath'] = $CONFIGS['basepath'];
        
        Twig_Autoloader::register();

        $twig_cfg = array(
            // TODO ativar o cache abaixo
//            'cache' => ROOTPATH . '/view/cache',
        );

        $loader = new Twig_Loader_Filesystem(ROOTPATH . '/view/templates');
        $this->twig = new Twig_Environment($loader, $twig_cfg);
        
        $this->twig->load($this->template);
    }

    function run() {
        echo $this->twig->render($this->template, $this->params);
    }

}
