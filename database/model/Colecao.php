<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Colecao extends ActiveRecord\Model {
    
    public static $table_name = 'colecao';
    static $primary_key = 'id';
    
}

