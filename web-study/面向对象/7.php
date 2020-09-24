<?php
//trait的继承使用
//trait 冲突
trait Log{
    public function common()
    {
        return __METHOD__;
    }
}
trait Common{
    public function common()
    {
        return __METHOD__;
    }
}
class Topic {
    use Log,Common{
        Log::common insteadOf Common;
        Common::common as send;
    }

}
$topic =new Topic;
echo $topic->send();
?>