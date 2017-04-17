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
require_once 'Artigo_noticiaVO.php';

class Artigo_noticiaDAO extends Dao{
    
    function retrieve($id){
        
        $query = 'SELECT * FROM artigo_noticia WHERE id = ' . $id;
        $rs = $this->queryForResultSet($query);
        
        $vo = new Artigo_noticiaVO();
        
        foreach ($rs as $row){
            $vo->setId($row['id']);
            $vo->setArtigo_id($row['artigo_id']);
            $vo->setConteudo($row['conteudo']);
        }
        
        return $vo;
        
    }
    
    
}
