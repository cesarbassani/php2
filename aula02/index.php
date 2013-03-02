<html>
<head><title>Images</title>
</head>

<body>


<?php
require 'DirectoryItems.php';
$di = new DirectoryItems('fotos');
$di->checkAllImages() or die("Not all file are images.");
$di->naturalCaseInsensitiveOrder();



//mostra o fileArray
echo "<div style = 'text-align:center;'>";
foreach($di->getFileArray() as $key => $value){
    echo "<img src='fotos/$value' /><br>";
}

echo "</div><br>";

?>

</body>
</html>