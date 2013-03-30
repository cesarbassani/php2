<?php

ini_set("display_errors", 'on');

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
require_once "MDB2.php";

$dsn = array(
    'phptype'   =>  'mysql',
    'username'  =>  'root',
    'password'  =>  'milenium',   //senha: milenium
    'hostspec'  =>  'localhost',
    );

$options = array(
    'debug'            =>  2,
    'portability'      =>  MDB2_PORTABILITY_ALL,
);

$link = & MDB2::factory($dsn, $options);
if (PEAR::isError($link)) {
    die($link->getMessage());
}


?>
