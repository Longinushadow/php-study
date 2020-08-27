<?php
class Captcha
{
    protected $width;
    protected $height;
    protected $image;
    protected $len;
    protected $code;
    public function __construct(int $width=300,int $height=100,int $len=4)
    {
        $this->width=$width;
        $this->height=$height;
        $this->len=$len;
    }
    public function render()
    {
        $image=imagecreatetruecolor($this->width,$this->height);
        $white=imagecolorallocate($this->image=$image,200,200,200);
        imagefill($image,0,0,$white);
        $this->text();
        $this->line();
        $this->pix();
        $this->show();
        return strtoupper($this->code);
    }
    protected function text()
    {   
        
        $font=realpath('Alibaba-PuHuiTi-Bold.ttf');
        $text='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        for ($i=0; $i <$this->len ; $i++) { 
            $x=$this->width / $this->len;
            $angle=mt_rand(-20,20);
            $box=imagettfbbox(20,$angle,$font,'A');
            $y=$this->height / 2 -($box[7]-$box[1]) / 2;
            $this->code.=$code=$text[mt_rand(0,strlen($text)-1)];
            imagettftext($this->image,
            20,
            $angle,
            $x * $i + 20,
            $y,
            $this->textColor(),
            $font,
            $code
        );
        }
    }
    protected function pix()
    {
        for ($i=0; $i <200; $i++) { 
            imagesetpixel(
                $this->image,
                mt_rand(0,$this->width),
                mt_rand(0,$this->height),
                $this->color()
            );
        }
    }
    protected function show()
    {
        header('content-type:image/png');
        imagepng($this->image);
    }
    protected function line()
    {   
        imagesetthickness($this->image,mt_rand(1,6));
        for ($i=0; $i < 6; $i++) { 
            imageline($this->image,mt_rand(0,$this->width),mt_rand(0,$this->height),mt_rand(0,$this->width),mt_rand(0,$this->height),$this->color());
        };
    }
    protected function color()
    {
        return imagecolorallocate($this->image,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
    }
    protected function textColor()
    {
        return imagecolorallocate($this->image,mt_rand(0,100),mt_rand(0,100),mt_rand(0,100));

    }
}
?>