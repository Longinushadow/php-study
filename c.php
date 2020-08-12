<?php
//常量的声明
define('USERNAME','祁奔宇',false);
echo USERNAME;
echo '<hr/>';
const name='祁奔宇';
function show(){
      echo name;
}
show();
var_dump(defined('username'));
echo '<hr/>';
echo PHP_VERSION;
echo PHP_OS;
echo '<hr/>';
class Demo{
    public function show1(){
        echo __METHOD__;
    }
}
(new Demo())->show1();
echo '<hr/>';
print_r(get_defined_constants(true)['user']); //打印常量(user的常量);

?>