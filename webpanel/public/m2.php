


<html>

<head>
<style>




form {
  display: flex;
  justify-content: center; 
}

button {
  margin: 200 20px;
}

</style>
</head>

<body>













<form method="post">
  <button type="submit" name="button1">137.100</button>
  <button type="submit" name="button2">137.900</button>
</form>

<?php

$file = '/home/pi/raspberry-noaa-v2/scripts/common.sh';

if(isset($_POST['button1'])) {
  $content = str_replace('METEOR_FREQ="137.9000"', 'METEOR_FREQ="137.1000"', file_get_contents($file));
  file_put_contents($file, $content);
}

if(isset($_POST['button2'])) {
  $content = str_replace('METEOR_FREQ="137.1000"', 'METEOR_FREQ="137.9000"', file_get_contents($file));
  file_put_contents($file, $content);
}











?>

</body>

</html>