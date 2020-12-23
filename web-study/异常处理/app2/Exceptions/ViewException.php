<?php
namespace App2\Exceptions;

use Exception;

class ViewException extends Exception{
    public function render(){
        echo __METHOD__;
    }
}
?>