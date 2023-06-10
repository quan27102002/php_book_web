<?php
include "connect.php";
$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id= '$id'";
$query = mysqli_query($connect, $sql);

echo "<script>";
echo "alert('xoá thành công');";
echo "window.location.href='./quanlyuser.php';";
echo "</script>";
?>