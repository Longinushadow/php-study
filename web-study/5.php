<?php   
// 查看test.html的效果
session_start();
// echo $_POST['abc'];
// echo $_SESSION['captcha'];
if (strtoupper($_POST['abc'])==$_SESSION['captcha']) {
    echo 'yes';
}else{
    echo 'no';
}
?>