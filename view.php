<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/view.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">BOOKS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">Đăng xuất</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Thể loại
                            </a>
                            <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul> -->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Giỏ hàng</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <?php
    include "connect.php";

    $sql = "SELECT * FROM data ";
    $query = mysqli_query($connect, $sql);

    while ($row = mysqli_fetch_assoc($query)) {
        $tieude = $row['tieude'];
        $tacgia = $row['tacgia'];
        $gia = $row['gia'];
        $anh = $row['anh'];

        ?>
        <ul class="list-group">

            <li class="list-group-item">
                <div class="row">
                    <div class="col-3">
                        <img src="<?php echo $anh ?>" class="img-fluid">
                    </div>
                    <div class="col-9">
                        <h5>
                            <?php echo $tacgia ?>
                        </h5>
                        <p>
                            <?php echo $tieude ?>
                        </p>
                        <span class="badge bg-primary">Price:
                            <?php echo $gia ?>
                        </span>
                        <button class="btn btn-primary">Add to Cart</button>
                        <button type="button" class="btn btn-primary"><a href="./chitiet.php" class="deltail">Chi
                                tiết</a></button>
                    </div>
                </div>
            </li>

        </ul>

        <?php
    }
    ?>
    <div class="continer">
        <div class="row">
            <div class="container">
                <h1>List Products</h1>
            </div>
        </div>
    </div>
</body>

</html>