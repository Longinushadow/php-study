<?php
function sum()
{
    echo 'qwer';
}
$call ='sum';
echo $call();
echo '<hr/>';
$file='12345.cng';
$file1='2345.jpg';
$a= trim(strchr($file,'.'),'.');
echo $a;
echo '<hr/>';
function jpg()
{
    return 'jpg fun';
}
function png()
{
    return 'png fun';
}
if (function_exists($a)) {
    echo 'yesyes';
}else{
    echo 'nonono';
}
try {
    echo $a();
} catch (\Throwable $th) {
    echo $th->getMessage();
}
?>