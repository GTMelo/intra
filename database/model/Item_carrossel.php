<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Item_carrossel extends ActiveRecord\Model {

    public static $table_name = 'item_carrossel';
    static $primary_key = 'objeto_id';
    static $has_one = array(
//        array(
//            ['objeto', 'class_name' => 'Objeto'],
//        )
    );

}
