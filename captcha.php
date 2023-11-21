<?php
session_start();
$str_rand = md5(rand());
$str = substr($str_rand, 0, 6);
$_SESSION['captcha'] = $str;
$newImage = imagecreate(100, 30);
imagecolorallocate($newImage, 81, 45, 109);
$col = imagecolorallocate($newImage, 0, 157, 174);
imagestring($newImage, 45, 10, 5, $str, $col);
header('Content-Type: image/jpeg');
imagejpeg($newImage);
exit();
?>
