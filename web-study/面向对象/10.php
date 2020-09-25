<?php
abstract class Users{
     abstract protected function data(array $data);
     public function setUser()
     {
         $this->data(['name'=>'QiBy','age'=>24,'mobile'=>15967509077]);
     }
}
class User extends Users{
    protected $field=[];
    public function getAll(){
        //调用setUser方法，获取data数据，由data()方法，传给field[];
        $this->setUser();
        return $this->field;
    }
    protected function data(array $data)
    {
        $this->field=$data;
    } 
    protected function mobile(){
        return  substr($this->field['mobile'],0,8).'***';
    }
    public function __get($name)
    {   
        //如果存着对应的方法名，则执行该方法
        if(method_exists($this,$name)){
            return call_user_func_array([$this,$name],[]);
        }
        //如果存着对应的值，则返回该值。
        if (isset($this->field[$name])) {
            return $this->field[$name];
        }
        //若不存在，抛出异常。
        throw  new Exception('参数错误');
    }
    public function __set($name, $value)
    {   
        //若存在该键，则将$value改为该键值。
        if (isset($this->field[$name])) {
            $this->field[$name]=$value;
        }else{
        //若无，抛出异常。
        throw  new Exception('参数错误');
        }
    }
}
try {
    $user= new User;
    $user->getAll();//获取数据
    // print_r($user->getAll());
    // $user->name='123445';
    echo $user->name;
} catch (Exception $e) {
    echo $e->getMessage();
}


?>