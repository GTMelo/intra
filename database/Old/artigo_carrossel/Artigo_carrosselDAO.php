<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artigo_carrosselDAO
 *
 * @author Gustavo
 */
require_once ROOTPATH . '/database/Dao.php';
require_once 'Artigo_carrosselVO.php';

class Artigo_carrosselDAO extends DAO {

    function retrieve($id) {

        $query = 'SELECT * FROM artigo_carrossel WHERE id = ' . $id;
        $rs = $this->pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);

        if (!$rs) return false;

        $vo = new Artigo_carrosselVO();

        foreach ($rs as $row) {

            $id = $row['id'];
            $artigo_id = $row['artigo_id'];
            $imagem = $row['imagem'];

            $vo->setId($id);
            $vo->setArtigo_id($artigo_id);
            $vo->setImagem($imagem);
        }

        return $vo;
    }

}