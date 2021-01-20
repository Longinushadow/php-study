<?php
namespace DateBase;

use Exception;
use PDO;

class DB{
    public function __construct(array $config)
    {
        $this->connect($config);
    }
    protected function connect(array $config){
        $dsn=sprintf("mysql:host=%s;dbname=%s;charset=%s",
             $config['host'],$config['database'],$config['charset']);
        $this->link=new PDO($dsn,$config['user'],$config['password'],[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);   
    }
    public function query_prepare(string $sql,array $vars){
        $sth=$this->link->prepare($sql);
        $sth->execute($vars);
        print_r($sth->fetchAll()) ;
    }
    public function query(string $sql,array $vars){
        $sth=$this->link->prepare($sql);
        return $sth->execute($vars);
    }
}


?>