<?php
// $arr=['qi','hdms'];
// list($a,$b)=$arr;
// echo $a.' '.$b;
// $user = ['name'=>'qibenyu','age'=>24];
// list('name'=>$name,'age'=>$age)=$user;
// echo $name;
$arr=['qi','hdms','1234567'];
list(,,$a)=$arr;
echo $a;
echo '<hr/>';
$users=[
    ['name'=>'qiby','age'=>'24'],
    ['name'=>'qiby-1','age'=>'23'],
    ['name'=>'qiby-2','age'=>'22'],
];
while(list('name'=>$name,'name'=>$age)=current($users)):
    echo 'name:{'.$name.'},age:{'.$age.'}'.'<br/>';
    next($users);
endwhile;

echo '<hr/>';
foreach ($users as $key=>$user ) {
    $users[$key]['age']+=50;
    echo $key.'='.$user['age'].'<br/>';
    }
    echo '<hr/>';
print_r($users);

?>