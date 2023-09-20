
<html>
<head>
<style>
#text {
  text-align: center;
}
</style>
</head>
<body>

<?php
$file = '/home/pi/raspberry-noaa-v2/scripts/common.sh'; 
$line = 54;
$text = explode("\n", file_get_contents($file))[$line];
?>

<div id="text"><?php echo $text; ?></div>

</body>
</html>