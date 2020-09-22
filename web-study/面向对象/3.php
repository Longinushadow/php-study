<?php
class Notify{
    protected $credit=10;
    protected $color='red';
    public function message(){
        return '<span style="color:'.$this->color.'">123456 '.$this->credit().'</span>';
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
}
class Comment extends Notify{
    public function send(){
          return $this->message();
    }
}
echo (new User)->register().' '.(new Comment)->send();

?>