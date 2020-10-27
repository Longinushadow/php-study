<?php
namespace App;
include 'helper.php';
class User{
    public static function make(){
        echo  __METHOD__;
    }
}
function help()
{
    echo 'help in index';
}
// User::make();
// \helper\help();若有命名空间namespace 则需要\helper ;
help();
// echo web;
?>