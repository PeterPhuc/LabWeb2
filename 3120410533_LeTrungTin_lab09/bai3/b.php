<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3 lab 9</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            padding-left: 20%;
        }
        input {
            width: 400px !important;
        }
    </style>
</head>
<body>
    <h1>Nhập thông tin sản phẩm</h1>
    <form action="add-record.php" method="post">
        <label for="">Nhập tên sản phẩm: </label>
        <input type="text" name="name" id=""><br>

        <label for="des">Nhập mô tả sản phẩm: </label><br>
        <textarea name="des" id="des" cols="30" rows="5" maxlength="5000"></textarea><br>

        <label for="">Nhập giá sản phẩm: </label>
        <input type="text" name="pri" id=""><br>

        <label for="">Thêm ảnh sản phẩm: </label>
        <input type="text" name="img" id=""><br>

        <button type="submit" class="btn btn-primary">Enter</button>
    </form>

    <script src="validate.js"></script>
</body>
</html>