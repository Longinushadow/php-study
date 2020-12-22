<?php
class Code{
    // protected $error;
    public function make(int $len){
        // if($this->line($len)===false){
        //     return false;
        // };
        $this->line($len);
    }
    protected function line(int $len){
        if($len>5){
            // $this->error='验证码线超过5个';
            // return false;
            throw new Exception('验证码线超过5个');
            
        }
    }
    // public function getError(){
    //       return $this->error;
    // }
}

?>