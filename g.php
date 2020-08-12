<?php
// $arr = [0=>'123',1=>2,2=>3];
// $arr[]='1234';
// print_r($arr);
$users=[
    ['name'=>'qiby','age'=>'24'],
    ['name'=>'qiby-1','age'=>'24-1'],
    ['name'=>'qiby-2','age'=>'24-2'],
];
print_r($users);
echo '<hr/>';
// $arr=['qiby','qwe'];
// echo current($arr);
// next($arr);
// echo current($arr);
// $article=[
//     ['title'=>'vs code',
//     'created_at'=>'2020-7-23'],
//     ['title'=>'vs code-2',
//     'created_at'=>'2020-7-23-2']
// ];
// echo '<hr/>';
// echo $article[1]['title'];
?>
<table border="1">
<tr>
<th>编号</th>
<th>姓名</th>
<th>年龄</th>
</tr>
<?php
while ($user=current($users)) :?>
    <tr>
        <td><?php echo key($users)+1; ?></td>
        <td><?php echo $user['name']; ?></td>
        <td><?php echo $user['age']; ?></td>
    </tr>
<?php 
next($users);
endwhile;
?>
</table>