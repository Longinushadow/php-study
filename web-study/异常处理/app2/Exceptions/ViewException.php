<?php
namespace App2\Exceptions;

use Exception;
use App2\Servers\View;

class ViewException extends Exception{
    public function render(){
        View::make('error',['message'=>$this->getMessage()]);
    }
}
?>