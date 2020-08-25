<?php
header('content-type:image/gif');
$image=imagecreatefrompng('1.png');
$red=imagecolorallocate($image,255,0,0);
$text='QiBenYu';
$font=realpath('Alibaba-PuHuiTi-Bold.ttf');
$width=imagesx($image);
$height=imagesy($image);
imagettftext($image,20,0,$width*0.5,$height*0.5,$red,$font,$text);
imagepng($image);

?>