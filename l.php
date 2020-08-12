<?php
date_default_timezone_set('PRC');
echo date('Y-m-d H:i:s');
echo '<hr/>';
// echo time();
// echo microtime();
function runtime($start=null,$end=null)
{    
    static $cache=[];
    if(is_null($start)){
        return $cache;
    }elseif(is_null($end)){
        return $cache[$start]=microtime(true);
    }else{
        $end=$cache[$end]??microtime(true);
        return round($end-$cache[$start],2);
    }
}
runtime('for');
for ($i=0; $i < 20000000; $i++) { 
    $i++;
};
runtime('forEnd');
echo runtime( 'for','forEnd');


?>