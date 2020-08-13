<?php
// session_save_path('session_save');
// session_name('qiby');
session_start();
$_SESSION['web']='qibenyu';
print_r($_SESSION);
echo '<hr/>';
echo session_id();
// session_destroy();