<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">

                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <form method="post" accept-charset="utf-8" action="handleData.php">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" name="tieude" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Tác giả</label>
                                    <input type="text" name="tacgia" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input type="text" name="mota" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Ngày phát hành</label>
                                    <input type="date"  name="ngayphathanh" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="text" name="gia" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Số trang </label>
                                    <input type="text" name="sotrang" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Thể loại </label>
                                    <input type="text" name="theloai" class="form-control" required>
                                </div>
                                <!-- <div class="form-group">
                                    <label>Link ảnh </label>
                                    <input type="text" name="anh" class="form-control" required>
                                </div> -->
                                

                                
                                <button type="submit" class="btn btn-primary" name="submit">Upload</button>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col order-5">
                <form method="POST" enctype="multipart/form-data">
                    <input type="file" name="anh" id="imageInput" accept="image/*">
                    <br>
                    <div id="imagePreview"></div>
                    <br>

                </form>

            </div>

        </div>
    </div>
    <script>
        // Lắng nghe sự kiện khi người dùng chọn tệp
        document.getElementById("imageInput").addEventListener("change", function (event) {
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                var imgElement = document.createElement("img");
                imgElement.src = e.target.result;
                imgElement.classList.add("preview-img");

                var previewContainer = document.getElementById("imagePreview");
                previewContainer.innerHTML = "";
                previewContainer.appendChild(imgElement);
            };

            reader.readAsDataURL(file);
        });
    </script>
</body>

</html>