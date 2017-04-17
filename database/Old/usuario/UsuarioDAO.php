<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAOClass
 *
 * @author Gustavo
 */
require_once ROOTPATH . '/database/Dao.php';
require_once ROOTPATH . '/database/perfil/PerfilDAO.php';
require_once 'UsuarioVO.php';

class UsuarioDAO extends Dao {

    function retrieve($id) {

        $query = 'SELECT * FROM usuario WHERE id = ' . $id;
        $rs = $this->pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

        if (!$rs)
            return false;
        
        $perfildao = new PerfilDAO();

        $vo = new UsuarioVO();

        foreach ($rs as $row){

        $id = $row['id'];
        $perfil = $perfildao->retrieve($id);
        $nome_completo = $row['nome_completo'];
        $nome_curto = $row['nome_curto'];
        $cpf = $row['cpf'];
        $data_nascimento = strtotime($row['data_nascimento']);
        
        $vo->setId($id);
        $vo->setPerfil($perfil);
        $vo->setNome_completo($nome_completo);
        $vo->setNome_curto($nome_curto);
        $vo->setCpf($cpf);
        $vo->setData_nascimento($data_nascimento);

        }

        return $vo;
    }

    function retrieveList() {
        
    }

    function insert() {
        
    }

    function update() {
        
    }

    function delete() {
        
    }

}
