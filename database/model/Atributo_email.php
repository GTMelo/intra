<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Atributo_email extends ActiveRecord\Model {
    
    public static $table_name = 'atributo_email';
    static $primary_key = 'id';
    
}

