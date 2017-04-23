<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObjetoVO
 *
 * @author Gustavo
 */
class ObjetoVO {
    
    private $id;
    private $titulo;
    private $tldr;
    private $status;
    private $detalhes;
    private $arquivo;
    
    function __construct($array) {
        $this->id       = $array['id'];
        $this->titulo   = $array['titulo'];
        $this->tldr     = $array['tldr'];
        $this->status   = $array['status'];
        $this->detalhes = $array['detalhes'];
        $this->arquivo  = $array['arquivo'];
    }
    
    function getValue($key){
        return $this->$key;
    }
        
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getTldr() {
        return $this->tldr;
    }

    function getStatus() {
        return $this->status;
    }

    function getDetalhes() {
        return $this->detalhes;
    }

    function getArquivo() {
        return $this->arquivo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setTldr($tldr) {
        $this->tldr = $tldr;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setDetalhes($detalhes) {
        $this->detalhes = $detalhes;
    }

    function setArquivo($arquivo) {
        $this->arquivo = $arquivo;
    }


    
}
