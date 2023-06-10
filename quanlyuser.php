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
   
    <form>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên người dùng</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>

                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                include "connect.php";

                $sql = "SELECT * FROM user ";
                $query = mysqli_query($connect, $sql);

                while ($row = mysqli_fetch_assoc($query)) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $email = $row['email'];
                    $password = $row['password'];

                    ?>
                    <tr>
                        <th scope="row">
                            <?php echo $id ?>
                        </th>
                        <th scope="row">
                            <?php echo $username ?>
                        </th>
                        <th scope="row">
                            <?php echo $email ?>
                        </th>
                        <th scope="row">
                            <?php echo $password ?>
                        </th>


                        <th scope="row">

                            <a href="./deleteuser.php?id=<?php echo $row['id']; ?>" class=" btn btn-outline-primary">Xoá
                        </th>
                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>
    </form>
</body>

</html>