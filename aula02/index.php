<?php
require 'DirectoryItems.php';

$dc = new DirectoryItems('fotos');
$dc->filter();

$path = "";
$fileArray = $dc->getFileArray();

echo '<div style="text-align: center;"';
echo "Clique no nome do arquivo para exibir a imagem no tamanho original.<br />";

// especifica o tamanho dos thumbnails
$size = 100;
foreach($fileArray as $key => $value) {
    $path = "fotos/$key";
    /*
     * erros no script getthumb ou na classe resultara em links
     * quebrados. Os erros serao ocultados.
     */
    echo "<img src='getthumb.php?path=$path&size=$size' style='border:1px solid black; margin-top:20px;' alt='$value' /><br />";

    echo "<a href='$path' target='_blank' >";
    echo "Title: $value </a> <br>";

}

echo "</div> <br>";

?>