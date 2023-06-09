<?php

include "connect.php";
if (isset($_POST['submit'])) {
    if ($_POST['username'] != NULL && $_POST['password'] != NULL) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $query = mysqli_query($connect, $sql);

        if (mysqli_num_rows($query)) {
            echo "<script>";
            echo "alert('Đăng nhập thành công');";
            echo "window.location.href='./view.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('Đăng nhập thất bại');";
            echo "window.location.href='./login.php';";
            echo "</script>";
        }
    } else {
        echo "<script>";
        echo "alert('Vui lòng điền đủ thông tin');";
        echo "window.location.href='./login.php';";
        echo "</script>";
    }

} else {
    echo "<script>";
    echo "alert('Bạn đang truy cập trái phép');";
    echo "window.location.href='./login.php';";
    echo "</script>";
}


?>