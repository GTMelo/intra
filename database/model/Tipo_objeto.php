<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Tipo_objeto extends ActiveRecord\Model {
    
    public static $table_name = 'tipo_objeto';
    static $primary_key = 'id';
    
}

