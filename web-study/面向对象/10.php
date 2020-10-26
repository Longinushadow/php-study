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
    protected $deny=['name'];
    public function getAll(){
        //调用setUser方法，获取data数据，由data()方法，传给field[];
        $this->setUser();
        return $this->field;
    }
    protected function data(array $data)
    {
        $this->field=$data;
    } 
    protected function setMobile(){
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
    public function __unset($name)
    {
        if (!isset($this->field[$name])|| in_array($name,$this->deny)) {
            # code...
            throw new Exception('属性不存在或者禁止操作');
        }
        $this->field[$name]='';
    }
    public function __isset($name)
    {
        return isset($this->field[$name]);
    }
    public function __call($name, $arguments)
    {
        $action = 'getAttribute'.$name;
        if(method_exists($this,$action)){
            return call_user_func_array([$this,$action],$arguments);
        }
    }
    public static function __callStatic($name, $arguments)
    {
        switch ($name) {
            case 'get':
                return call_user_func_array([new static(),'getAll'],$arguments);
                break;
            default:
                $obj=new static();
                $obj->getAll();
                return call_user_func([$obj,'__call'],$name,$arguments);
            
        }
    }

}
class Model extends User{
    protected function getAttributeMobile(int $len=7){
            return substr($this->field['mobile'],0,$len).'***';
    }
}

try {
    print_r(User::get());
    echo '<hr/>'.'123';
    echo Model::mobile();//调用Model下函数，user中没有getAttributeMobile方法.
    // $user= new Model;
    // $user->getAll();//获取数据
    // // print_r($user->getAll());
    // $user->name='123445';
    // echo $user->mobile();
} catch (Exception $e) {
    echo $e->getMessage();
}


?>