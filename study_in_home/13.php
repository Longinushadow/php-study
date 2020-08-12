<?php
date_default_timezone_set('PRC');
echo date('Y-m-d H:i:s',time()-3600);
echo '<hr/>';
print_r( getdate()['year']);
echo '<hr/>';
$datetime=new DateTime('2020-02-02 08:08:08');
// $datetime->setTimestamp(time());
echo $datetime->format('U');
$date=DateTime::createFromFormat('Y-m-d H:i:s','2002-10-10 08:22:22');
echo $date->format('Y-m-d H:i:s');

// function runtime($start=null,$end=null) 
// {
//     static $cache=[];
//     if(is_null($start)){
//        return $cache;
//     }elseif (is_null($end)) {
//         return $cache[$start]=microtime(true);
//     }else{
//         $end=$cache[$end]??microtime(true);
//         return round($end-$cache[$start],2);
//     }
// }
// runtime('while');
// $n=0;
// while ($n<2000000) {
//     $n++;
// };
// runtime('whileEnd');
// echo runtime('while','whileEnd');
?>