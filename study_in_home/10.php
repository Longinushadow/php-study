<?php
$database=include 'config.php';
// print_r($database);
function  hd_array_change_key_case(array $data,int $type=CASE_UPPER):array{
    foreach($data as $key=>$value){
        $action =$type==CASE_UPPER?'strtoupper':'strtolower';
        unset($data[$key]);
        $data[$action($key)]=is_array($value)?hd_array_change_key_case($value,$type):$value;
    }
    return $data;
}
print_r(hd_array_change_key_case($database));
?>