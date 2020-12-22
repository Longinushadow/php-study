<?php
class ValidateException extends Exception{
    public function __toString()
    {
        return $this->getFile().$this->getCode().$this->getLine().$this->getMessage();
    }
}
try {
    throw new validateException('验证错误',403);
} catch (ValidateException  $th) {
    // echo $th->getFile().'</br>';//异常文件
    // echo $th->getCode().'</br>';//异常 code
    // echo $th->getLine().'</br>';//异常行号
    // echo $th->getMessage().'</br>';
    // __toString
    echo $th;
    // echo '优先级'.$th->getMessage();
} catch (Exception $e){
    // echo 'Exception'.$e->getMessage();
}


?>