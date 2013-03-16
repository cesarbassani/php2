<?php

require_once 'Person.php';

$pessoa = new Person("Bob", 44);

$pessoa->name = "Bob da Silva";
$pessoa->age = 30;

$pessoa->xpto('teste', 123);

echo "Nome: ". $pessoa->name . "<br>";
echo "Age: ". $pessoa->age . "<br>";


?>
