<?php
// include '1.html';
// require ('new.html');//require强加载
$a=0.1;
$b=0.2;
// echo $a+$b;
require_once 'b.php';
// include_once 'b.php';
include_once 'c.php';
echo show();
?>