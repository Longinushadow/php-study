<?php
include 'c.php';
$str=' bilibili.com ';
echo strtoupper($str);
echo $str;
echo '<hr/>';
echo strlen($str);
echo '<hr/>';
echo strlen(trim($str,' com'));
echo '<hr/>';
echo ucwords('hello world');
echo '<hr/>';
echo md5('bilibili.com');
$file ='use-1-info';
echo '<hr/>';
echo md5($file).'.php'; //md5哈希
echo '<hr/>';
$arr= explode('.','qibenyu.com'); //拆分
echo $arr[0];
// $arr2=['email','google'];
echo '<hr/>';
// echo implode(':',$arr2);
$ad ='我们在notion里面对自己对资料进行规划记录保持';
echo mb_substr($ad,0,5,'utf8'); //字符串的截取
echo '<hr/>';

?>