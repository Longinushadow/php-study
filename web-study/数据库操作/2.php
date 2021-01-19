<?php
header("Content-type:text/html;charset=utf8");
$config=[
    'host'=>'localhost',
    'user'=>'root',
    'password'=>'root',
    'database'=>'mysql',
    'charset'=>'utf8'
];
$dsn=sprintf("mysql:host=%s;dbname=%s;charset=%s",
$config['host'],$config['database'],$config['charset']);
// echo $dsn;
try {
    $pdo=new PDO($dsn,$config['user'],$config['password'],[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);
    $query=$pdo->query("select * from study_test where id>2");
    while($filed=$query->fetch()){
        echo sprintf("title:%s\tname:%s\tsex:%s</br>",$filed['title'],$filed['name'],$filed['sex']);
    }

} catch (PDOException $e) {
    die ($e->getMessage());
}
?>