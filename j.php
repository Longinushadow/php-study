<?php
$users=[
    ['name'=>'qiby','age'=>'15'],
    ['name'=>'qiby-1','age'=>'23'],
    ['name'=>'qiby-2','age'=>'22'],
];
$test=[
    'host'=>'asdf',
    'ip'=>'123456'
];
// $filteUsers=array_filter($users,function ($user)
// {
//     return $user['age']>20;
// });
//  print_r($filteUsers);
// $mapuser =array_map(function($user){
//     unset($user['age']);
//     return $user;
// },$users);
// print_r($mapuser);
// $names=array_map(function ($user)
// {
//     return $user['name'];
// },$users);
// print_r($names);
// $value=array_map(function($user){
//      return implode('-',array_values($user));
// },$users);

$a=CASE_UPPER;
$aa=array_change_key_case($test,1);
print_r ($aa);
// foreach ($users as $key => $value) {
//     $users[CASE_UPPER($key)]=$value;
// }
?>