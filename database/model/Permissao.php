<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Permissao extends ActiveRecord\Model {
    
    public static $table_name = 'permissao';
    static $primary_key = 'id';
    
}

