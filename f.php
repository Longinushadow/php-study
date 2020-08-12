<?php
//namespace 命名空间分离同名函数
namespace fuser;
// include 'e.php';
function user($tel,$num=2,$fix ='****')
{       
    return substr($tel,0,-1*$num).str_repeat($fix,$num);
}
echo user('1234567781',2,'@');
echo '<hr/>';
function show(&$var)
{
    $var++;
    echo $var;
}
$var=1;
show($var);
echo '<hr/>';
echo $var;
function sum($var1,$var2)
{
   return $var1+$var2;
}
echo '<hr/>';
function sum2(...$vars)
{   return array_sum($vars);
    print_r($vars);
}
echo sum2(1,3,4,5,3);
echo '<hr/>';
function sum3($num):int
{   
    if($num>1)
    {
    $num=$num*sum3($num-1);
    }
    return $num;

}
echo sum3(5); //5*4*3*2*1
?>