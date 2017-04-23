<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Unidade_has_atributo_unidade extends ActiveRecord\Model {
    
    public static $table_name = 'unidade_has_atributo_unidade';
    static $primary_key = 'unidade_id';
    
}

