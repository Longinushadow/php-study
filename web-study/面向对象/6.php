<?php
//trait的继承使用
//class自有方法优先级>trait优先级>extends优先级
trait Log{
    public function save()
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
class Site{
    public function common()
    {
        return __METHOD__;
    }
}
class Topic extends Site{
    use Log,Common;
}
$topic =new Topic;
echo $topic->common();
?>