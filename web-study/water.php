<?php
class Water
{   
    protected $water;
    public function __construct(string $water)
    {
        $this->water=$water;
    }
    public function make(string $image,string $filename=null,$pos=1)
    {   
        $this->checkImage($image);
        $res= $this->resource($image);
        // $info=getimagesize($image);
        // print_r($info);
        $water = $this->resource($this->water);
        $position=$this->position($res,$water,$pos);
        imagecopy($res,$water,$position['x'],$position['y'],0,0,imagesx($water),imagesy($water));
        header('content-type:image/jpeg');
        // return $this->showAction($image)($res);
        return $this->showAction($image)($res,$filename??$image);
        // var_dump($res);
    }
    protected function position($res,$water,$pos){
         $position=['x'=>20,'y'=>20];
         switch ($pos) {
             case '1':
                 break;
             case '2':
                 $position['x']=(imagesx($res)-imagesx($water))/2;
                 break;
             case '3':
                 $position['x']=(imagesx($res)-imagesx($water));
                 break;
             case '4':
                 $position['y']=(imagesy($res)-imagesy($water))/2;
                 break;
             case '5':
                 $position['x']=(imagesx($res)-imagesx($water))/2;
                 $position['y']=(imagesy($res)-imagesy($water))/2;
                 break;
             case '6':
                 $position['x']=(imagesx($res)-imagesx($water));
                 $position['y']=(imagesy($res)-imagesy($water))/2;
                 break;
             case '7':
                 $position['y']=(imagesy($res)-imagesy($water));
                 break;
             case '8':
                 $position['x']=(imagesx($res)-imagesx($water))/2;
                 $position['y']=(imagesy($res)-imagesy($water));
                 break;
             case '8':
                 $position['x']=(imagesx($res)-imagesx($water));
                 $position['y']=(imagesy($res)-imagesy($water));
                 break;
             default:
                 break;
         }
         return $position;
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