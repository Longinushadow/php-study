<?php
$total  =10;
echo min($total,max(1,$_GET['page']??1));

?>