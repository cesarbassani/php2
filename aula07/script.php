<?php

require_once("Console/Getopt.php");

$verbose = 1;
$config_file = $_ENV['HOME'] . '/.myrc';
$options = Console_getopt::getopt($argv, 'hqvc:');

foreach ($options[0] as $opt) {
    switch ($opt[0]) {
        case 'q':
            $verbose--;
            break;
        case 'v':
            $verbose++;
            break;
        case 'h':
            usage();
            break;
        case 'c':
            $config_file = $opt[1];
            break;
    }
}

if ($verbose > 1) {
    print "config file is \"$config_file\".\n";
}

function usage () {
    $stderr = fopen("php://stderr", "w");
    $progname = basename($GLOBALS['argv'][0]);
    fwrite($stderr, "Usage: $progname [-qvh] -c [config-file]
            options:
            -q menos detalhado
            -v mais detalhado
            -h ver ajuda
            -c <file> ler configuracoes de <file>");

    fclose($stderr);
}

echo "Sua linha de comando foi: " . implode(" ", $argv);
?>
