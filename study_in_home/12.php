<?php
function cache(string $name,array $data=null)
{
    $file='cache'.DIRECTORY_SEPARATOR.$name;
    if (is_null($data)) {
        $content=is_file($file)?file_get_contents($file):null;
        return unserialize($content)?:null;
    }else{
        return file_put_contents($file,serialize($data));
    }
}
$config =include 'config.php';
print_r (cache('database'));


function getcache(string $name ,$data)  
{
    $file='cache'.DIRECTORY_SEPARATOR.$name;
    if(is_null($data)){
        $content=is_file($file)?file_get_contents($file):null;
        return unserialize($content)?:null;
    }else{
        return file_put_contents($file,serialize($data));
    }

}
$con=getcache('abcd',$config);
?>