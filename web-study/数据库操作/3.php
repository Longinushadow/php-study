<?php
//预准备，防止被用户sql注入
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
    // $query=$pdo->query("select * from study_test where id={$_GET['id']}");
    // print_r($query->fetchAll());
    // 查询 
    $sth=$pdo->prepare("select * from study_test where id>=? and id<=?");
    $sth->execute([$_GET['begin'],$_GET['end']]);
    print_r($sth->fetchAll());
    //插入 $sth=$pdo->prepare("Insert into study_test (title,name,sex) values(:title,:name,:sex)");
    // $sth->execute([':title'=>'第7个',':name'=>'xiaoxiao',':sex'=>'女']);
    //更新 $sth=$pdo->prepare("Update study_test set title=:title where id=7");
    // $sth->execute([':title'=>'第七个']);

} catch (PDOException $e) {
    die ($e->getMessage());
}
?>