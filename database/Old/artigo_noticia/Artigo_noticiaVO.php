<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PerfilVO
 *
 * @author Gustavo
 */
class Artigo_noticiaVO {
    
    protected $id;
    protected $artigo_id;
    protected $conteudo;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getArtigo_id() {
        return $this->artigo_id;
    }

    function getConteudo() {
        return $this->conteudo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setArtigo_id($artigo_id) {
        $this->artigo_id = $artigo_id;
    }

    function setConteudo($conteudo) {
        $this->conteudo = $conteudo;
    }





    
}
