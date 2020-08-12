<?php
// $arr =['host'=>'localhost','port'=>'3306','user'=>'root'];
// print_r(array_merge($arr,['host'=>'127.0.0.1','password'=>'123456']));
$database =include 'config.php';
echo '<hr/>';
$database=array_change_key_case($database,CASE_LOWER);
print_r($database);
?>