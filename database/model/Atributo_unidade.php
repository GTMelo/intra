<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Atributo_unidade extends ActiveRecord\Model {
    
    public static $table_name = 'atributo_unidade';
    static $primary_key = 'id';
    
}

