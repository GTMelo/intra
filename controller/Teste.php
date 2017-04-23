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
require_once DATABASEPATH . 'model/Objeto.php';
require_once DATABASEPATH . 'model/Objeto_metadado.php';
require_once DATABASEPATH . 'model/Item_carrossel.php';

class Teste extends Controller implements IController {
    
    function __construct() {
        parent::__construct();
    }

    public function run() {
        
        $t = Item_carrossel::find(301);
        
        var_dump($t);
        
        
//        $params = [
//            'conditions' => ['status in (?)', [0,1]],
//            'limit' => 1,
//            'order' => 'id desc'
//            ];
//        
//        $d = Objeto::all($params);

//        $d = Objeto::find(1);
        
//        echo $d->id;
//        echo $d->objeto_metadado->data_criacao;
        
//        print_r($d->objeto_metadado);
        
//        pretty_dump($d);
    }

}
