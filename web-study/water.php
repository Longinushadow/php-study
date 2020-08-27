<?php
class Water
{
    public function make(string $image)
    {
        $res= $this->resource($image);
        var_dump($res);
    }
    protected function resource(string $image)
    {
        $info=getimagesize($image);
        $functions=[1=>'imagecreatefromgif',2=>'imagecreatefromjpeg',3=>'imagecreatefrompng'];
        $call =$functions[$info[2]];
        return $call($image);
    }
}

?>