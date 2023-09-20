<?php

$filename = "/var/log/raspberry-noaa-v2/output.log";

if (file_exists($filename)) {

  $handle = fopen($filename, "r");

  while (!feof($handle)) {
    $line = fgets($handle);
    echo $line . "<br>";
  }

  fclose($handle);

} 

?>