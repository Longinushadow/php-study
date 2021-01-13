<?php
namespace App2\Servers;
use App2\Exceptions\ValidateException;
class Validate{
    public static function make(){
        $_SESSION['VALIDATE_ERROR'] = '';
        if (empty($_POST['title'])) {
            throw new ValidateException('表单错误');
        }
    }
}
?>