<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ArtigoVO
 *
 * @author Gustavo
 */
class ArtigoVO {

    protected $id;
    protected $tipo_artigo;
    protected $autor;
    protected $divisao;
    protected $titulo;
    protected $tldr;
    protected $status;
    protected $data_criacao;
    protected $ultima_edicao;
    
    function getId() {
        return $this->id;
    }

    function getTipo_artigo() {
        return $this->tipo_artigo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getDivisao() {
        return $this->divisao;
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

    function getData_criacao() {
        return $this->data_criacao;
    }

    function getUltima_edicao() {
        return $this->ultima_edicao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTipo_artigo($tipo_artigo) {
        $this->tipo_artigo = $tipo_artigo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setDivisao($divisao) {
        $this->divisao = $divisao;
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

    function setData_criacao($data_criacao) {
        $this->data_criacao = $data_criacao;
    }

    function setUltima_edicao($ultima_edicao) {
        $this->ultima_edicao = $ultima_edicao;
    }



}
