<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArtigoDAO
 *
 * @author Gustavo
 */
require_once ROOTPATH . '/database/Dao.php';
require_once 'ArtigoVO.php';

class ArtigoDAO extends DAO {
    
    function retrieve($id){
        
        $query = 'SELECT * FROM artigo WHERE id = ' . $id;
        
        $rs = $this->queryForResultSet($query);
        
        if(!$rs) return false;
        
        $vo = new ArtigoVO();
        
        foreach($rs as $row){
            $id = $row['id'];
            $tipo_artigo = $row['tipo_artigo'];
            $autor = $row['autor'];
            $divisao = $row['divisao'];
            $titulo = $row['titulo'];
            $tldr = $row['tldr'];
            $status = $row['status'];
            $data_criacao = $row['data_criacao'];
            $ultima_edicao = $row['ultima_edicao'];
            
            $vo->setId($id);
            $vo->setTipo_artigo($tipo_artigo);
            $vo->setAutor($autor);
            $vo->setDivisao($divisao);
            $vo->setTitulo($titulo);
            $vo->setTldr($tldr);
            $vo->setStatus($status);
            $vo->setData_criacao($data_criacao);
            $vo->setUltima_edicao($ultima_edicao);
        }
        
        return $vo;
        
    }
    
}
