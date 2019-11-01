<?php
include_once "base.php";
$sql="select * from user ";
$rows=$pdo->query($sql)->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    
    table{

        width:500;
        height:300;
        border-collapse:collapse;
        
    }
    td{
        border: solid 1px black;
        text-align:center;
    }
    </style>
</head>
<body>
<table>
    <tr>
        <td>姓名</td>
        <td>帳號</td>
        <td>地址</td>
        <td>電話</td>
        <td>email</td>
        <td>操作</td>
    </tr>
<?php
foreach($rows as $user){

?>
    <tr>
        <td><?=$user['name'];?></td>
        <td><?=$user['acc'];?></td>
        <td><?=$user['addr'];?></td>
        <td><?=$user['tel'];?></td>
        <td><?=$user['email'];?></td>
        <td><a href="del_user.php?id=<?=$user['id'];?>">刪除</a></td>
    </tr>
    <?php
}

    ?>
</table>
</body>
</html>
