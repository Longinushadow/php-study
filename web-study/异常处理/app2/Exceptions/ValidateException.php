<?php
namespace App2\Exceptions;

use Exception;

class ValidateException extends Exception{
    public function render(){
        $_SESSION['VALIDATE_MESSAGE']=$this->getMessage();
        header("location:index.php");
        // echo $this->getMessage();
        // echo '</br>';
        // echo __METHOD__;
    }
}
?>