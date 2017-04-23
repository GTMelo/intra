<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Atributo_telefone extends ActiveRecord\Model {
    
    public static $table_name = 'atributo_telefone';
    static $primary_key = 'id';
    
}

