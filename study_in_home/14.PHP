<?php
date_default_timezone_set('PRC');
$datetime1=new DateTime();
$datetime2=new DateTime('2020-10-18');
$interval=$datetime1->diff($datetime2);
$format ='my birthday <span style="color:red">%m月%d天%h小时</span>共有%a天';
echo $interval->format($format);
$datetime=new DateTime();
$interval1=new DateInterval('P3DT3H3M');
$datetime->add($interval1);
echo '<hr/>';
echo $datetime->format('Y-m-d H:i:s');

?>