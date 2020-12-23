<?php
namespace App2\Servers;
use App2\Exceptions\ViewException;
class View{
    public static function make(string $file){
          $file ='Views/'.$file.".blade.php";
          if(!\is_file($file)){
              throw new ViewException("模板文件不存在");
          }
          include $file;
    }
}
?>