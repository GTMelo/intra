<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PerfilDAO
 *
 * @author Gustavo
 */

require_once ROOTPATH . '/database/Dao.php';
require_once 'PerfilVO.php';

class PerfilDAO extends Dao{
    
    function __construct() {
        
        parent::__construct();
        
    }

    
    function retrieve($id){
        
        $query = 'SELECT * FROM perfil WHERE id =' . $id;
        $rs = $this->queryForResultSet($query);
        
        $vo = new PerfilVO();
        
        foreach($rs as $row){
            $id = $row['id'];
            $descricao = $row['descricao'];
            
            $vo->setId($id);
            $vo->setDescricao($descricao);
        }
        
        return $vo;
        
    }
    
    
}
