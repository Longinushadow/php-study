<?php
//入栈和出栈
// $user=['123','456','789'];
// array_push($user,'0');
// print_r($user);
// echo '<hr/>pop 0.';
// echo '<hr/>';
// array_pop($user);
// print_r($user);
// echo '<hr/>';
// array_unshift($user,'0');
// print_r($user);
// echo '<hr/>';
// array_shift($user);
// print_r($user);
// echo '<hr/>';
// echo count($user);
$allowimagetype=['jpeg'=>2000,'jpg'=>200,'png'=>20];
$file='hdcms.jpeg';
$ext=strtolower(substr(strrchr($file,'.'),1));
var_dump($ext);
if (!array_key_exists($ext,$allowimagetype)){
    echo 'wrong';
}else{
    echo 'no';
}
echo '<hr/>';
// if (!in_array($ext,$allowimagetype)) {
//     echo 'no';
// }
// else{
//     echo 'yes';
// }
var_dump (array_keys($allowimagetype));
echo '<hr/>';
if (!in_array($ext,array_keys($allowimagetype))) {
    echo 'error';
}else{
    echo 'yes';
}
?>