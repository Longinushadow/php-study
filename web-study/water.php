<?php
class Water
{
    public function make(string $image,string $filename=null)
    {   
        $this->checkImage($image);
        $res= $this->resource($image);
        // $info=getimagesize($image);
        // print_r($info);
        return $this->showAction($image)($res,$filename??$image);
        // var_dump($res);
    }
    protected function checkImage(string $image)
    {
        if(!is_file($image) || getimagesize($image)===false){
            throw new Exception('file is not image or file is not existed');
        }
    }
    protected function showAction(string $image)
    {
        $info=getimagesize($image);
        $functions=[1=>'imagegif',2=>'imagejpeg',3=>'imagepng'];
        return $functions[$info[2]];

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