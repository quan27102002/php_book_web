<?php

include "connect.php";
if (isset($_POST['submit'])) {
    if ($_POST['email'] != NULL && $_POST['password'] != NULL) {

        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $query = mysqli_query($connect, $sql);

        if (mysqli_num_rows($query)) {

            if ($_POST['email'] == 'admin') {
                echo "<script>";
                echo "alert('Xin chào admin');";
                echo "window.location.href='./admin.php';";
                echo "</script>";
            } else {
                echo "<script>";
                echo "alert('Đăng nhập thành công');";
                echo "window.location.href='./view.php';";
                echo "</script>";
            }
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