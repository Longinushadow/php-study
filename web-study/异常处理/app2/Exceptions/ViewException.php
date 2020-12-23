<?php
namespace App2\Exceptions;
use Exception;
class ViewException extends Exception{
    public function render($e){
        echo __METHOD__;
    }
}
?>