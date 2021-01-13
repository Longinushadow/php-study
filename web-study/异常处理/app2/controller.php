<?php
include 'bootstrap.php';
use App2\Servers\Validate;
use App2\Servers\View;
Validate::make();
View::make('success');
?>