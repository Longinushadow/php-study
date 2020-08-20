<?php
class FileHandle implements SessionHandlerInterface
{
    protected $save_path;
    protected $maxlifetime;
    public function __construct($save_path='session_save',$maxlifetime=1400)
    {
        $this->save_path=$this->mkdir($save_path);
        $this->maxlifetime=$maxlifetime;
    }
    public function close(){
        return true;
    }
    public function destroy($session_id) 
    {   
        if (is_file($this->save_path. '/' .$session_id)) {
        @unlink($this->save_path.'/'.$session_id);
    }
        return true;
    }
    public function gc($maxlifetime)
    {
        foreach (glob($this->save_path.'/*')as $file) {
           if (filemtime($file)+$this->maxlifetime<time()) {
               @unlink($file);
           }
        }
        return true;
    }
    protected function mkdir($save_path)
    {
        is_dir($save_path)or mkdir($save_path,0755,true);
        return realpath($save_path);
    }
    public function open($save_path, $name)
    {
        
        return true;
    }
    public function read($session_id)
    {
        return (string)@file_get_contents($this->save_path.'/'.$session_id);
    }
    public function write($session_id, $session_data)
    {
        return (bool)@ file_put_contents($this->save_path. '/'. $session_id,$session_data);
    }
}