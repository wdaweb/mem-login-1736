<?php
include_once "base.php";

$id=$_GET['id'];
$sql="DELETE FROM user WHERE id=$id";
echo $sql;
$pdo->exec($sql);
header("location:admin.php");



?>