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
    $pdo=new PDO($dsn,$config['user'],$config['password']);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);设置警告模式
    // echo 'success';
    //插入 echo $pdo->exec("INSERT INTO study_test (title,name,sex) VALUES('第六个','祁','男')");
    //删除 echo $pdo->exec("DELETE from study_test where id>4");
    // echo $pdo->lastInsertId();
    //更新 echo $pdo->exec("UPDATE study_test set sex='女' where id>1");
    //查询 
    $pdo->setAttribute(PDO::ATTR_CASE,PDO::CASE_UPPER);
    $query=$pdo->query("select * from study_test");
    $rows=$query->fetchAll();
    print_r($rows);

} catch (PDOException $e) {
    die ($e->getMessage());
}
?>