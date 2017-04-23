<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Cargo extends ActiveRecord\Model {
    
    public static $table_name = 'cargo';
    static $primary_key = 'id';
    
}

