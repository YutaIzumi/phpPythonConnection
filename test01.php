<?php
$command="python test01.py testMessage";
exec($command, $output);
print "$output[0]\n";
print "$output[1]\n";
print "$output[2]\n";
?>
