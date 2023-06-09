<?php
include "connect.php";
if (isset($_POST['submit'])) {
    if ($_POST['username'] != NULL && $_POST['password'] != NULL && $_POST['email'] != NULL) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $email = $_POST['email'];
        $sql = "INSERT INTO user (username, email,password) VALUES ('$username', '$email','$password')";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            echo "<script>";
            echo "alert('Đăng ký thành công');";
            echo "window.location.href='./login.php';";
            echo "</script>";
        }
    } else {
        echo "<script>";
        echo "alert('Vui lòng điền đủ thông tin');";
        echo "window.location.href='./dangky.php';";
        echo "</script>";
    }

} else {
    echo "<script>";
    echo "alert('Bạn đang truy cập trái phép');";
    echo "window.location.href='./login.php';";
    echo "</script>";
}


?>