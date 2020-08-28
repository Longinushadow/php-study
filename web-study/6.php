<?php
include 'water.php';
try{
$water=new Water;
$water->make('5.png','3.png');
}catch (Exception $e){
    echo $e->getMessage();
}
?>