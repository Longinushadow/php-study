<?php
class User{
    protected $name;
    protected static $className='十四';
    public function setName(string $name)
    {
     $this->name=$name;
    }
    public function say()
    {
      return self::$className.'的'.$this->getName().' :ni hao ';
    }
    public function getName()
    {
        return $this->name;
    }
    public static function getClassName(){
      return self::$className;
    }
}
$obj= new User;
echo $obj->setName('123');
echo $obj->say();

?>