<?php

$fp = fopen("/tmp/saida.txt", "a");

if (!$fp) {
    die("Falha ao abrir arquivo");
}

fwrite($fp, "Teste 123\n");
fwrite($fp, "segunda linha" . PHP_EOL);
fwrite($fp, "terceira linha" . "\n");

fclose($fp);