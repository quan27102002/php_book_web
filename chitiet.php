<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <?php
  $id = $_GET['ID'];
  include "connect.php";

  $sql = "SELECT * FROM data WHERE id = '$id' ";
  $query = mysqli_query($connect, $sql);

  while ($row = mysqli_fetch_assoc($query)) {
    $anh = $row['anh'];
    $tieude = $row['tieude'];
    $tacgia = $row['tacgia'];
    $gia = $row['gia'];
    $mota = $row['mota'];
    $ngayphathanh = $row['ngayphathanh'];

  }
  ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src=" <?php echo $anh ?>" alt="Product Image" class="img-fluid">
      </div>
      <div class="col-md-8">
        <h1>
          <?php echo $tieude ?>
        </h1>
        <p class="text-muted">
          <?php echo $tacgia ?>
        </p>
        <h2 class="text-primary">
          <?php echo $gia ?>
        </h2>
        <p>
          <?php echo $mota ?>
        </p>

        <button class="btn btn-primary">Thêm vào giỏ hàng</button>
      </div>
    </div>
  </div>
</body>

</html>