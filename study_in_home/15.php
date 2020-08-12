<?php
// echo ceil(10.2);
// echo floor(10.2);

// function code($int=5):string
// {
//     $string ='qwerasdfzxcv1234567890';
//     $code='';
//     for ($i=0; $i < $int; $i++) { 
//         $index =mt_rand(0,strlen($string)-1);
//         $code.=strtoupper($string[$index]);
//     }
//     return $code;
// }
// echo '<hr/>';
// echo code(6);
echo $_GET('page')??1;
?>