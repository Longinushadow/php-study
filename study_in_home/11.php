<?php
$database=include 'config.php';
print_r($database);
echo '<hr/>';
$config=var_export($database,true);
echo $config;
echo '<hr/>';
$cache= serialize($database);
print_r(unserialize($cache));

// file_put_contents('config.php',$config);
?>