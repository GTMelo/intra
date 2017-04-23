<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Unidade extends ActiveRecord\Model {
    
    public static $table_name = 'unidade';
    static $primary_key = 'id';
    
}

