<?php
session_start();
header('Content-type: image/jpeg');
$text=$_SESSION['secure'];
//echo $_SESSION['secure'];
$fontsize=30;
$imagewidth=110;
$imageheight=40;

$image=imagecreate($imagewidth,$imageheight);
imagecolorallocate($image,255,255,255);

$textcolor= imagecolorallocate($image,0,0,0);
imagettftext($image, $fontsize,0,15,30,$textcolor,'font.ttf',$text);
imagejpeg($image);
?>
