<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Objeto extends ActiveRecord\Model {
    
    public static $table_name = 'objeto';
    static $primary_key = 'id';
    static $has_one = array(
        ['objeto_metadado', 'class_name' => 'Objeto_metadado']
    );
    static $belongs_to = array(
        ['item_carrossel', 'class_name' => 'Item_carrossel']
    );
    
}

