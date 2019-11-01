<?php
 include_once "base.php"; 

if(empty($_COOKIE['login'])){
  header("localtion:index.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>會員中心</title>
  <link rel="stylesheet" href="style.css">
  <style>
td{
  border:1px solid black;
  width:150px;
  height:20px;
}
  </style>
</head>
<body>

  <div class="member">
    <div class="wellcome">
      HI! 歡迎光臨!以下是你的個人資料:
    </div>
    <div class="private">
      <!--請自行設計個人資料的呈現方式並從資料庫取得會員資料-->
<?php


$sql="select * from user where id='".$_COOKIE['id']."'";
// echo $sql;
$user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// print_r($user);
?>
<a href="logout.php">登出</a>
<table>
  <tr>
    <td>id</td>
    <td><?=$user['id'];?></td>
  </tr>
  <tr>
    <td>acc</td>
    <td><?=$user['acc'];?></td>
  </tr>
  <tr>
    <td>pw</td>
    <td><?=$user['pw'];?></td>
  </tr>
  <tr>
    <td>name</td>
    <td><?=$user['name'];?></td>
  </tr>
  <tr>
    <td>addr</td>
    <td><?=$user['addr'];?></td>
  </tr>
  <tr>
    <td>tel</td>
    <td><?=$user['tel'];?></td>
  </tr>
  <tr>
    <td>birthday</td>
    <td><?=$user['birthday'];?></td>
  </tr>
  <tr>
    <td>email</td>
    <td><?=$user['email'];?></td>
  </tr>
</table>







    </div>
    <a href="index.php">回首頁</a>
  </div>
</body>
</html>