<?php
namespace App2\Servers;
use App2\Exceptions\ValidateException;
class Validate{
    public static function make(){
            if(empty($_POST['title'])){
                throw new ValidateException("title Error");
                
            }
            else {
                throw new ValidateException("title have");
            }
    }
}
?>