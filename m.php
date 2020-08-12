<?php
date_default_timezone_set('PRC');
echo date('Y-m-d H:i:s',strtotime('next saturday'));
echo '<br/>';
echo strtotime('NOW');
echo '<br/>';
$dateTime= new DateTime();
echo $dateTime->format('Y-m-d H:i:s');
echo '<br/>';
$dateTime2=DateTime::createFromFormat('Y-m-d H:i:s','2020-7-30 17:15:40');
echo $dateTime2->format('Y-m-d H:i:s');
?>