<?php
include 'Thumb.php';
$thumb=new Thumb;
try{
$thumb->make('picture.jpg','1.jpg',300,500,3);
}catch (Exception $e){
    echo $e->getMessage();
}
?>