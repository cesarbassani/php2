<?php

require_once 'conexao.php';

$sql = "SELECT * FROM sistema.users";

# le 3 registros a partir do sexto
$link->setLimit(3, 6);
$result = $link->query($sql);

while( $row = $result->fetchRow() ) {
    echo $row[1] . "<br>";
}


?>
