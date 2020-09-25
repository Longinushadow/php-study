<?php
//trait的继承使用
//trait 冲突
trait One{
      public function getSite()
     {
         return '123';
     }
}
trait Log{
    public function common()
    {
        return __METHOD__;
    }
}
trait Common{
    use One;
    public function common()
    {
        return __METHOD__;
    }
    //静态与抽象方法
    abstract public function name();
    public static function show()
    {
        return 'show yes';
    }

}
class Topic {
    use Log,Common{
        Log::common insteadOf Common;
        Common::common as send;
    }
    public function name(){
        return 'name,yes';
    }

}
$topic =new Topic;
echo $topic->show();
?>