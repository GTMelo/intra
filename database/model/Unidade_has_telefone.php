<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Unidade_has_telefone extends ActiveRecord\Model {
    
    public static $table_name = 'unidade_has_telefone';
    static $primary_key = 'unidade_id';
    
}

