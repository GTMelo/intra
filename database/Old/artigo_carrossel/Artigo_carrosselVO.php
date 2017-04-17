<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artigo_carrosselVO
 *
 * @author Gustavo
 */
class Artigo_carrosselVO {
    
    protected $id;
    protected $artigo_id;
    protected $imagem;
    
    function getId() {
        return $this->id;
    }

    function getArtigo_id() {
        return $this->artigo_id;
    }

    function getImagem() {
        return $this->imagem;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setArtigo_id($artigo_id) {
        $this->artigo_id = $artigo_id;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

}
