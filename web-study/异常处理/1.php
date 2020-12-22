<?php
include 'Code.php';
$code=new Code;
try {
    $code->make(100);
} catch (Exception $e) {
    echo $e->getMessage();
}


?>