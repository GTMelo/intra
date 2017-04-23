<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Classe genérica para os DAOs
 *
 * @author Gustavo
 */
abstract class Dao {
    
    private $db;
    
    function __construct() {
        
        require_once DATABASEPATH . 'common/Conexao.php';
        
        $this->db = Conexao::getInstance();
        
    }
    
    function getDb() {
        return $this->db;
    }





    
}
