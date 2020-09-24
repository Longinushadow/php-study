<?php
//abstract 定义子类需要实现的方法
abstract class Notify{
    protected $credit=10;
    protected $color='red';
    abstract public function content();
    public function message(){
        return '<span style="color:'.$this->color.'">123456 '.$this->content().$this->credit().'</span>';
    }
    public function credit(){
        return  $this->credit;
    }
}
class User extends Notify{
    public function register(){
        return $this->message();
    }
    public function credit(){
        return 5;
    }
    public function message()
    {
        //parent 使用父类message()
        return parent::message();
    }
    public function content()
    {
        return 'user_class';
    }
}
class Comment extends Notify{
    public function send(){
        return $this->message();
    }
    public function content()
    {
        return 'comment_class';
    }
}
echo (new User)->register().' '.(new Comment)->send();

?>