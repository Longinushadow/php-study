<?php
include 'Captcha.php';
$captcha= new Captcha(300,200,6);
$code=$captcha->render();
file_put_contents('yzm.php',$code);
?>