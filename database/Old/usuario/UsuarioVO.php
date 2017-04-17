<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioClass
 *
 * @author Gustavo
 */
class UsuarioVO {

    private $id;
    private $perfil;
    private $nome_completo;
    private $nome_curto;
    private $cpf;
    private $data_nascimento;

    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function getNome_completo() {
        return $this->nome_completo;
    }

    function getNome_curto() {
        return $this->nome_curto;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getData_nascimento() {
        return $this->data_nascimento;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function setNome_completo($nome_completo) {
        $this->nome_completo = $nome_completo;
    }

    function setNome_curto($nome_curto) {
        $this->nome_curto = $nome_curto;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setData_nascimento($data_nascimento) {
        $this->data_nascimento = $data_nascimento;
    }



}
