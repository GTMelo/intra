<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Telefone_has_atributo_telefone extends ActiveRecord\Model {
    
    public static $table_name = 'telefone_has_atributo_telefone';
    static $primary_key = 'telefone_id';
    
}

