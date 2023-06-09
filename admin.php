<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="./styles/admin.css">
    <title>Document</title>
</head>

<body>
<button type="button" class="btn btn-primary add"><a href="http:./postData.php" class="add-item">Add new book</a></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tiêu đề</th>
                <th scope="col">Tác giả</th>
                <th scope="col">Thể loại</th>
                <th scope="col">Giá</th>
                <th scope="col">Ngày phát hành</th>
                <th scope="col">Số trang</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php
            include "connect.php";

            $sql = "SELECT * FROM data ";
            $query = mysqli_query($connect, $sql);

            while ($row = mysqli_fetch_assoc($query)) {
                $id = $row['id'];
                $tacgia = $row['tacgia'];
                $tieude = $row['tieude'];
                $theloai = $row['theloai'];
                $gia = $row['gia'];
                $ngayphathanh = $row['ngayphathanh'];
                $sotrang = $row['sotrang'];

                ?>
                <tr>
                    <th scope="row">
                        <?php echo $id ?>
                    </th>
                    <th scope="row">
                        <?php echo $tacgia ?>
                    </th>
                    <th scope="row">
                        <?php echo $tieude ?>
                    </th>
                    <th scope="row">
                        <?php echo $theloai ?>
                    </th>
                    <th scope="row">
                        <?php echo $gia ?>
                    </th>
                    <th scope="row">
                        <?php echo $ngayphathanh ?>
                    </th>
                    <th scope="row">
                        <?php echo $sotrang ?>
                    </th>

                    <th scope="row">
                        <a href="./xuly.php?id=<?php echo $row['id']; ?>" class=" btn btn-outline-primary">Sửa
                            <a href="./delete.php?id=<?php echo $row['id']; ?>" class=" btn btn-outline-primary">Xoá
                    </th>
                </tr>

                <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>