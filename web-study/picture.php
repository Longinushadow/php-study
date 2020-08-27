<?php
header('content-type:image/gif');
$res=imagecreatefromjpeg('picture.jpg');
// imagejpeg($res);
$water=imagecreatefrompng('2.png');
// echo imagesx($water).'X'.imagesy($water);
imagecopy($res,$water,100,100,0,0,imagesx($water),imagesy($water));
imagejpeg($res);
 
?>