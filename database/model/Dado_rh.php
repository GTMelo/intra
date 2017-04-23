<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Dado_rh extends ActiveRecord\Model {
    
    public static $table_name = 'dado_rh';
    static $primary_key = 'usuario_id';
    
}

