<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAOClass
 *
 * @author Gustavo
 */

class Dao {

    protected $pdo;

    function getPdo() {
        return $this->pdo;
    }

    function __construct() {
        
        require_once ROOTPATH . '/database/Conexao.php';
        $this->pdo = Conexao::getInstance();
        
    }
    
    function queryForResultSet($query) {
        return $this->pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    }

}
