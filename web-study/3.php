<?php
header('content-type:image/gif');
$image=imagecreatetruecolor(500,500);
$red=imagecolorallocate($image,255,0,0);
$green=imagecolorallocate($image,0,255,0);
$blue=imagecolorallocate($image,0,0,255);
$white=imagecolorallocate($image,255,255,255);
imagefill($image,0,0,$white);
$font=realpath('Alibaba-PuHuiTi-Bold.ttf');
$text='QiBenYu';
// for ($i=0; $i <mb_strlen($text); $i++) { 
//     imagettftext(
//         $image,20,mt_rand(0,30),35*$i+50,50,$red,$font,mb_substr
//         ($text,$i,1,'utf-8'));

// }
$size=20;
$box=imagettfbbox($size,0,$font,$text);
$width=$box[2]-$box[0];
$height=$box[1]-$box[7];
imagettftext($image,$size,0,0,$height,$blue,$font,$text);
imagepng($image);
// imagedestroy($image);
?>