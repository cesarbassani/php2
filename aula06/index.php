<?php
ini_set('display_erros', 'on');

require_once("File.php");

try {
    $a = new File("Arquivo.txt");
    echo "<pre>";
    $a->showFile();
    echo "<pre>";
}
catch ( EFileNotFound $e )
{
    echo $e->getMessage();
    echo "\nVc jah criou esse arquivo?";
}
catch ( EFileEmpty $e )
{
    echo $e->getMessage();
    echo "\nVc jah colocou alguma coisa nesse arquivo?";
}
catch ( EFileNotInformed $e )
{
    echo $e->getMessage();
    echo "\nEh preciso informar um arquivo";
}
catch ( Exception $e )
{
    echo $e->getMessage();
    echo "\nExcecao generica";
}

?>
