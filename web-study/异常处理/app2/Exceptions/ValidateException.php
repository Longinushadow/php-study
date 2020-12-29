<?php
namespace App2\Exceptions;

use Exception;

class ValidateException extends Exception{
    public function render(){
        echo $this->getMessage();
        echo __METHOD__;
    }
}
?>