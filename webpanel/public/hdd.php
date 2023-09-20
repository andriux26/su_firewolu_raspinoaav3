<?php

// Get Raspberry Pi CPU temp
$temp = fopen("/sys/class/thermal/thermal_zone0/temp", "r");
$tempReading = fread($temp, 5); 
fclose($temp);
$cpuTemp = $tempReading / 1000;

// Get free disk space 
$disk = disk_free_space("/");
$freeSpace = number_format($disk / 1024 / 1024 / 1024, 2);

// Output temperature and space
echo "Raspberry Pi CPU : ".$cpuTemp." C\n"; 
echo "Vieta diske: ".$freeSpace." GB";

?>