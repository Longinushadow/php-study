<?php
namespace DateBase;

use Exception;
use PDO;

class DB{
    protected $link;
    protected $options=['table'=>'','field'=>' * ','order'=>'','limit'=>'','where'=>''];
    public function __construct(array $config)
    {
        $this->connect($config);
    }
    protected function connect(array $config){
        $dsn=sprintf("mysql:host=%s;dbname=%s;charset=%s",
             $config['host'],$config['database'],$config['charset']);
        $this->link=new PDO($dsn,$config['user'],$config['password'],[PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC]);   
    }
    //查询
    public function query_prepare(string $sql,array $vars=[]){
        $sth=$this->link->prepare($sql);
        $sth->execute($vars);
        return $sth->fetchAll();
    }
    //插入/更新/删除
    public function query(string $sql,array $vars){
        $sth=$this->link->prepare($sql);
        return $sth->execute($vars);
    }
    public function table(string $table){
          $this->options['table']=$table;
        //   print_r($this->options);
          return $this;
    }
    public function field(...$fields){
        $this->options['field']='`'.implode('`,`',$fields).'`';
        // print_r($this->options);
        return $this;
    }
    public function limit(...$limit){
        $this->options['limit']="limit".implode(',',$limit);
        // print_r($this->options);
        return $this;
    }
    public function order(string $order){
        $this->options['order']="order by".$order;
        // print_r($this->options);
        return $this;
    }
    public function where(string $where){
        $this->options['where']=" where".$where;
        // print_r($this->options);
        return $this;
    }
    public function get(){
        $sql="SELECT {$this->options['field']} from {$this->options['table']} {$this->options['where']}
        {$this->options['order']} {$this->options['limit']}";
        // print_r($sql);
        return $this->query_prepare($sql);   
    }
    public function insert(array $vars){
        //insert into study_test () values ();
        $fields='`' . implode('`,`',array_keys($vars)) . '`';
        $values=implode(',',array_fill(0,count($vars),'?'));
        $sql="INSERT INTO {$this->options['table']} ($fields) values ($values)";
        return $this->query_prepare($sql,array_values($vars));
        // print_r($sql);
        // print_r(array_values($vars));
        // die($sql);
        
    }
}


?>