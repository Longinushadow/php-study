<?php
function helper()
{   
    if(is_uploaded_file($_FILES['up']['tmp_name'])){
        $to='files/'.$_FILES['up']['name']; //地址
        if(move_uploaded_file($_FILES['up']['tmp_name'],$to)){
            return $to;
        }
    }
    return false;
    
}


?>