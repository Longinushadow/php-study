<?php
// \d 0-9 \D ^0-9
// \w a-zA-Z0-9_  \W ^a-zA-Z0-9_
// \s 匹配任意空白  \S ^匹配任意空白
// \n 换行符  \t 制表符  
$status= preg_match('/a/','abc');

// 原子表  [abc]  [0-9]  [a-zA-Z]  
// .  匹配除换行符外
// $status1=preg_match('/[abc]/','abc');
// var_dump($status1);
// $str='1.jpg@2/png!eoe.aoj';
// $file= preg_split('/[@!]/',$str);
// var_dump($file);
// echo implode('|',$file);
//原子组 ()
$status2='baidu.com bilibili.com utf-8.com';
$preg='/(\.)(com)/';
$status1=preg_replace($preg,'\1<span style="color:red">\2</span>',$status2);
echo $status1; 
?>