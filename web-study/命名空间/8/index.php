<?php
namespace App;
use App\Module\Shop\Controller\User;
use App\Module\Shop\Server\Pay;
use App\Module\Shop\Server\User as UserServer;//as解决冲突
// include 'bootstrap.php';
include 'vendor/autoload.php';
// include 'Module/Shop/Controller/User.php';
// include 'Module/Shop/Server/Pay.php';
// include 'Module/Shop/Server/user.php';
User::make();
// echo '<hr/>';
// echo Pay::make();
// echo '<hr/>';
// echo UserServer::make();