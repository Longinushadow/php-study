<?php
include 'Thumb.php';
$thumb=new Thumb;
try{
$thumb->make('picture2.jpg',400,500);
}catch (Exception $e){
    echo $e->getMessage();
}
?>