<?php
include "connect.php";

if (isset($_POST['submit'])) {
    if ($_POST['tieude'] != NULL && $_POST['tacgia'] != NULL && $_POST['mota'] != NULL && $_POST['ngayphathanh'] != NULL && $_POST['gia'] != NULL && $_POST['sotrang'] != NULL && $_POST['theloai'] != NULL) {
        $tieude = $_POST['tieude'];
        $tacgia = $_POST['tacgia'];
        $mota = $_POST['mota'];
        $ngayphathanh = $_POST['ngayphathanh'];
        $gia = $_POST['gia'];
        $sotrang = $_POST['sotrang'];
        $theloai = $_POST['theloai'];
        // $anh = $_POST['anh'];
        $anh = $_FILES['anh']['name'];
        $tempname = $_FILES['anh']['tmp_name'];

        $link = "./src/images/" . $anh;
        move_uploaded_file($tempname, $link);

        $sql = "INSERT INTO data (tieude, tacgia, mota, ngayphathanh, gia, sotrang, theloai, anh) VALUES ('$tieude', '$tacgia', '$mota','$ngayphathanh','$gia','$sotrang','$theloai','$link')";
        $query = mysqli_query($connect, $sql);
        if ($query) {
            echo "<script>";
            echo "alert('Thêm mới thành công');";
            echo "window.location.href='./postData.php';";
            echo "</script>";
        }
    } else {
        echo "<script>";
        echo "alert('Vui lòng điền đủ thông tin');";
        echo "window.location.href='./postData.php';";
        echo "</script>";
    }

} else {
    echo "<script>";
    echo "alert('Bạn đang truy cập trái phép');";
    echo "window.location.href='./postData.php';";
    echo "</script>";
}
?>