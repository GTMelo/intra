<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Colecao_has_objeto extends ActiveRecord\Model {
    
    public static $table_name = 'colecao_has_objeto';
    static $primary_key = 'colecao_id';
    
}

