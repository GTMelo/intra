<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IDao
 *
 * @author Gustavo
 */
interface IDao {
    
    function getById($id);
    function getList($limit = '10', $offset = 0, $order = 'ASC', $status = null);
    function insert($object);
    function update($object);
    function delete($id);
    
}
