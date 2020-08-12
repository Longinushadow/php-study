<?php
$database=include 'config.php';
// print_r($database);
// function hd_array_change_value_case(array $data,int $case=CASE_UPPER):array
// {
//     $action=$case==CASE_UPPER?'strtoupper':'strtolower';
//     foreach ($data as $key => $value) {
//         $data[$key]=is_array($value)?hd_array_change_value_case($value):$action($value);

//     }
//     return $data;
// }
// print_r(hd_array_change_value_case($database，CASE_LOWER));
function array_change_value(array $data,int $type=CASE_UPPER)
:array {
    array_walk_recursive($data,function (&$value,$key,$type)
{   
    $action=$type==CASE_UPPER?'strtoupper':'strtolower';
    $value=$action($value);
    var_dump($value);
},$type);

return $data;
};
array_walk_recursive($database,function(&$value,$key,$type=CASE_UPPER){
   $action=$type==CASE_UPPER?'strtoupper':'strtolower';
    $value=$action($value);
},$type);
// array_walk_recursive($database,function (&$value,$key,$type)
// {   
//     $action=$type==CASE_UPPER?'strtoupper':'strtolower';
//     $value=$action($value);
// },$type);
print_r(array_change_value($database));
?>