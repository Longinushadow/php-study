<?php
//接口 类的方法通过接口来约束
interface Cache{
    public function set($name,$value);
    public function get($name,$value);
}
class Mysql implements Cache{
    public function set($name,$value){
        return $name.$value;
    }
    public function get($name,$value){}
}
class Redis implements Cache{
    public function set($name,$value){}
    public function get($name,$value){}
}
class Test{
    public function switch(string $one){
      switch ($one) {
          case 'mysql':
              return new Mysql;
              
          
          case 'redis':
              return new Redis;
              
      }
    }
}
$test =new Test;
$test=$test->switch('mysql');
var_dump($test->set('123','456'));
?>