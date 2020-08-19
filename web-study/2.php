<?php
header('content-type:image/gif');
$image=imagecreatetruecolor(500,500);
$red=imagecolorallocate($image,255,0,0);
$green=imagecolorallocate($image,0,255,0);
$blue=imagecolorallocate($image,0,0,255);
$white=imagecolorallocate($image,255,255,255);
imagefill($image,0,0,$white);
// imagerectangle($image,300,300,400,400,$green);
// imagefilledrectangle($image,320,320,380,380,$blue);
// imageellipse($image,100,100,100,100,$blue);
// imagefilledellipse($image,250,250,100,100,$blue);
// imagesetthickness($image,10);
// imagesetstyle($image,[$red,$green,$blue]);
// imageline($image,30,30,270,270,IMG_COLOR_STYLED);
for ($i=0; $i < 1000; $i++) { 
    imagesetpixel($image,mt_rand(0,500),mt_rand(0,500),$red);

}

imagepng($image);