<?php
class LoginException extends Exception{

}
class UploaderException extends Exception{
    
}
try {
    throw new LoginException("登录异常",403);//code...
} catch (LoginException $e) {
    echo 333;
}catch(UploaderException $e){
    echo 555;
}finally{
    echo '永远执行的代码 finally';
}

?>