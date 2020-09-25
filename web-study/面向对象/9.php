<?php
//_construct方法
//_destruct方法
class User{
    protected $user;
    public function __construct(string $user='qiby')
    {
        $this->user=$user;
    }
    public function userWho(){
        return 'user is'.' '.$this->user;
    }
    public function __destruct()
    {
        echo 'user is not found';
    }
}
$user=new User('123');
$user2=new User();
echo $user->userWho();
echo '<hr/>';
echo $user2->userWho();
echo '<hr/>';
?>