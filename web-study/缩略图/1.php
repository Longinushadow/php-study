<?php
header('content-type:image/jpeg');
$rw=300;
$rh=200;
$res =imagecreatetruecolor($rw,$rh);
$image=imagecreatefromjpeg('picture2.jpg');
$iw=imagesx($image);
$ih=imagesy($image);
if($iw/$rw>$ih/$rh){
    $iw =$ih/$rh*$rw;
}else{
    $ih =$iw/$rw*$rh;
}
imagecopyresampled($res,$image,0,0,0,0,$rw,$rh,$iw,$ih);
imagejpeg($res);
?>
