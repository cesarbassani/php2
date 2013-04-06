<?php

$fin = fopen("readfrom", "r"); //no lugar de STDIN
$fout = fopen("/tmp/writeto", "w");//no lugar de STDOUT

//nao uso STDERR

$desc = array( 0 => $fin, 1 => $fout); //descriptor spec

$res = proc_open("php", $desc, $pipes);

if ($res) {
    proc_close($res);
}


