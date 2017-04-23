<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Email extends ActiveRecord\Model {
    
    public static $table_name = 'email';
    static $primary_key = 'id';
    
}

