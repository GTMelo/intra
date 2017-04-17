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
require_once DATABASEPATH . 'Conexao.php';

//require_once ROOTPATH . '/database/generated/include_dao.php';


class Teste extends Controller implements IController {

    public function run() {

        $db = Conexao::getInstance();
        
        $foo = $db->select(
                'lista_aniversariantes',
                '*'
                );

//        $foo = $db->select(
//                'usuario', 
//                array('id', 'nome_completo', 'nome_curto', 'cpf', 'data_nascimento')
//        );
//        
        echo '<br>';
        
        foreach ($foo as $item){
            foreach($item as $key => $thing){
                echo $key . ' : ' . $thing;
                echo '<br>';
            }
            echo '<br>';
        }
    }

}
