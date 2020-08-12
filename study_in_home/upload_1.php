<?php
class Uploaders{
    public function make()
    {
    print_r($_FILES);
    $files=$this->format();
    print_r($files);
    }
    private function format():array
    {
      $files=[];
      foreach ($_FILES as $field) {
          if (is_array($field['name'])) {
              foreach ($field['name'] as $key=>$value) {
                  $files[]=[
                      'name'=>$field['name'][$key],
                      'type'=>$field['type'][$key],
                      'tmp_name'=>$field['tmp_name'][$key],
                      'error'=>$field['error'][$key],
                      'size'=>$field['size'][$key]
                  ];
              }
          }else{
              $files[]=$field;
          }
      }
      return $files;
    }
}

?>