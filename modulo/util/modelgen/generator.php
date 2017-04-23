<?php

require_once CONFIGPATH . 'config.php';

$db = new PDO('mysql:host=localhost;dbname=sain_v3;charset=utf8', $CONFIGS['db']['user'], $CONFIGS['db']['pass']);

$query = $db->query('SHOW TABLES');
$r = $query->fetchAll(PDO::FETCH_ASSOC);


$tables = array();


foreach($r as $table){
    $t = $table['Tables_in_sain_v3'];
    $q = 'SHOW columns FROM ' . $t;
    $tables[$t] = $db->query($q)->fetchAll(PDO::FETCH_ASSOC);
}

foreach($tables as $k => $v){
    $template = sprintf(file_get_contents('template.txt'), ucfirst($k), $k, $v[0]['Field']);
    $file = 'generated/' . ucfirst($k) . '.php';
    file_put_contents($file, $template);
}

//echo '<pre>' . var_export($tables, true) . '</pre>';
