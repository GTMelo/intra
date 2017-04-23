<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Unidade_has_email extends ActiveRecord\Model {
    
    public static $table_name = 'unidade_has_email';
    static $primary_key = 'unidade_id';
    
}

