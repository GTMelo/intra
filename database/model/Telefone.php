<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Telefone extends ActiveRecord\Model {
    
    public static $table_name = 'telefone';
    static $primary_key = 'id';
    
}

