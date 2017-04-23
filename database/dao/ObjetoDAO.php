<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ObjetoDAO
 *
 * @author Gustavo
 */
require_once DATABASEPATH . 'common/Dao.php';
require_once DATABASEPATH . 'common/IDao.php';

class ObjetoDAO extends Dao implements IDao {

    public function delete($id) {
        
    }

    public function getById($id) {

        $query = $this->getDb()->select(
                'objeto', '*', array(
            'id' => $id
                )
        );

        $result = array();

        require_once DATABASEPATH . 'vo/ObjetoVO.php';
        $vo = new ObjetoVO($query[0]);

        return $vo;
    }

    public function getList($limit = '10', $offset = 0, $order = 'DESC', $status = null) {

        $params = array(
        'LIMIT' => [$offset, $limit],
        'ORDER' => ['objeto.id' => $order]
        );
        
        if(isset($status)){
            $params['objeto.status'] = $status;
        }

        $query = $this->getDb()->select('objeto', '*', $params);

        require_once DATABASEPATH . 'vo/ObjetoVO.php';

        $result = array();

        foreach ($query as $item) {
            $vo = new ObjetoVO($item);
            array_push($result, $vo);
        }

        return $result;
    }

    public function insert($object) {
        
    }

    public function update($object) {
        
    }

}
