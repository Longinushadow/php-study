<?php
//protected 与 private
class Notify{
    protected function send(){
        return 'send ok';
    }
}
class User extends Notify{
    public function say()
    {
        return 'hello world'.$this->send();
    }
}
$user =new User;
echo $user->say();
?>