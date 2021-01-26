<?php
use DateBase\DB;
include 'DB.php';
$config=[
    'host'=>'localhost',
    'user'=>'root',
    'password'=>'root',
    'database'=>'mysql',
    'charset'=>'utf8'
];

try{
    $new=new DB($config);
    // $rows=$new->query("Insert into study_test (title,name,sex) values(:title,:name,:sex)",[':title'=>'第7个',':name'=>'DioDio',':sex'=>'女']);
    // $rows=$new->query_prepare('select * from study_test where id>=? ',['1']);
    // print_r($rows);
    // $rows=$new->table('study_test')->field('id','name','title')->order(' id')->limit(' 1')->get();
    // print_r($rows);
    // $rows=$new->table('study_test')->where(' id=2')->update(['title'=>"第九个",'name'=>"JiuJiu",'sex'=>"女"]);
    $rows=$new->table('study_test')->where(' id=10')->delete();
    print_r($rows);

}catch(Exception $e){
    die($e->getMessage());
}
?>