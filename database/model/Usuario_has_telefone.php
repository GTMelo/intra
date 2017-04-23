<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Usuario_has_telefone extends ActiveRecord\Model {
    
    public static $table_name = 'usuario_has_telefone';
    static $primary_key = 'usuario_id';
    
}

