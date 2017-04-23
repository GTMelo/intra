<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Escolaridade extends ActiveRecord\Model {
    
    public static $table_name = 'escolaridade';
    static $primary_key = 'id';
    
}

