<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Usuario extends ActiveRecord\Model {
    
    public static $table_name = 'usuario';
    static $primary_key = 'id';
    
}

