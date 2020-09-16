<?php
include 'water.php';
header('content-type:image/jpeg');
try{
$water=new Water('3.png');
$water->make('picture.jpg','5.jpg',3);
}catch (Exception $e){
    echo $e->getMessage();
}
?>