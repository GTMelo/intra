<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Tipo_colecao extends ActiveRecord\Model {
    
    public static $table_name = 'tipo_colecao';
    static $primary_key = 'id';
    
}

