<?php

$fp = fopen("/etc/services", "r");

if (!$fp) {
    die("Falha ao abrir arquivo");
}

echo "<pre>";
while ($line = fgets($fp))
    {

    echo $line;

}

fclose($fp);