<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Objeto_metadado extends ActiveRecord\Model {
    
    public static $table_name = 'objeto_metadado';
    static $primary_key = 'objeto_id';
    static $belongs_to = array(
        array(
            'objeto', 'class_name' => 'Objeto'
        )
    );
    
}

