<?php
header("content-type:image/jpeg");
mb_internal_encoding("UTF-8");
$name = $_GET['name']?$_GET['name']:"马大哈";
$im = imagecreatetruecolor(640, 853);
$bg = imagecreatefromjpeg('toutu3.jpg');
imagecopy($im,$bg,0,0,0,0,640,853);
imagedestroy($bg);
$black = imagecolorallocate($im, 20, 20, 20);
$text = $name;
$font = '../font/gb.ttf';
imagettftext($im, 21, 0, 115, 815, $black, $font, $text);

$showtime=date("Y-m-d");
$fonta = '../font/liguofu.ttf';
imagettftext($im, 16, 0, 115, 840, $black, $fonta, $showtime);

imagejpeg($im);
imagedestroy($im);
?>