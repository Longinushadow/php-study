<?php
session_start();
include 'Captcha.php';
$captcha= new Captcha(300,200,6);
$code=$captcha->render();
$_SESSION['captcha']=$code;
?>