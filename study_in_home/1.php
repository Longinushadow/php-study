<?php
$name='123';
// unset($name);
// var_dump(isset($name));
function make()
{
    // global $name;
    // echo $name;
    static $num =1;
    $num =$num+1;
    return $num .'<br>';
}
echo make();
echo make();
echo octdec(777);   //8进制
echo '<br>';
echo hexdec('FAF')  //16进制
?>