<?php

require_once DATABASEPATH . 'ActiveRecord/ActiveRecord.php';

Class Email_has_atributo_email extends ActiveRecord\Model {
    
    public static $table_name = 'email_has_atributo_email';
    static $primary_key = 'email_id';
    
}

