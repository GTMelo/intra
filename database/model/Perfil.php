<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Perfil extends ActiveRecord\Model {
    
    public static $table_name = 'perfil';
    static $primary_key = 'id';
    
}

