<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
</head>
<body>
<form  action="upload_1.php" method="post" enctype="multipart/form-data">
<input type="file" name="up">
<input type="file" name="images[]">  
<!-- 提交文件，信息存在数组中 -->
<input type="file" name="images[]">
<input type="file" name="images[]">
<button>提交</button>
</form>
</body>


</html>

<?php



?>