<?php
// for ($i=10; $i>0 ; $i--){
//     echo $i.'<br>';
// }
// do {
//     if(!isset($num)){
//         $num=10;
//     }
//     if($num==0){
//     break;
//     }
//     echo $num--;
// } while (true);

// $num=0;
// while ($num<20):
//     $num++;
//     switch($num){
//         case $num%2==0:
//             echo $num;
//         break;
//         case $num%15==0:
//             echo $num;
//         break ; 
//     }
// endwhile;
for ($i=10; $i >0; $i--) { 
    if($i%2==0)continue;
    echo $i;
}
?>