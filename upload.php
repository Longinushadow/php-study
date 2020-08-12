<?php
class test{
    protected $dir;
    public function make():array
    {   
        $saveFiles=[];
        $this->makeDir();
        $files=$this->format();
        print_r($files);
        foreach ($files as $file) {
            if($file['error']==0){
                if(is_uploaded_file($file['tmp_name'])){
                    // print_r(pathinfo($file['name']));
                   $to=$this->dir.'/'.time().mt_rand(1,9999). '.'. pathinfo($file['name'])['extension'];
                   if(move_uploaded_file($file['tmp_name'],$to)){
                       $saveFiles[]=[
                           'path'=>$to,
                           'name'=>$file['name'],
                           'size'=>$file['size'],
                           'type'=>$file['type']
                       ];
                   }
                }
            }
        }
        return $saveFiles;
    }
    private function makeDir():bool{
        $path='next_class/'.date('y/m');
        $this->dir=$path;
        return is_dir($path) or mkdir($path,0755,true);
    }
    private function format():array
    {
        $files=[]; 
        foreach ($_FILES  as $field) {
            if (is_array($field['name'])) {
                foreach ($field['name'] as $key => $value) {
                    $files[]=[
                       'name'=>$field['name'][$key],
                       'type'=>$field['type'][$key],
                       'tmp_name'=>$field['tmp_name'][$key],
                       'error'=>$field['error'][$key],
                       'size'=>$field['size'][$key],
                    ];
                }
            }else{
                $files[]=$field;
            }
            
        }
        return $files;
    }
}