<?php 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $conn = new mysqli('localhost', 'root', '', 'shop');
    if ($conn->connect_error) {
        echo "
            <script>
                alert('Kết nối đến db thất bại');
            </script>
        ";
    }else{
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $result->data_seek(0);
            $row = $result->fetch_assoc();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Sửa thông tin sản phẩm</h1>
    <form action="edit-record.php" method="post">
        <label for="">Tên sản phẩm: </label>
        <input type="text" name="name" id="" value="<?php echo $row['name']; ?>" ><br>

        <label for="des">Mô tả sản phẩm: </label><br>
        <textarea name="des" id="des" cols="90" rows="5" maxlength="5000"><?php echo $row['description']; ?></textarea><br>

        <label for="">Giá sản phẩm: </label>
        <input type="text" name="pri" id="" value=<?php echo $row['price']; ?> ><br>

        <label for="">Ảnh sản phẩm: </label>
        <input type="text" name="img" id="" value=<?php echo $row['image']; ?> ><br>

        <input type="text" name="id" value=
            <?php 
                if(isset($_GET['id'])){
                    echo $_GET['id'];
                }else{
                    echo 'nothing';
                }
            ?> 
        style="opacity: 0; width: 0px; height: 0px">
        <br>

        <button type="submit" class="btn btn-primary">Enter</button>
    </form>

    <script src="validate.js"></script>
</body>
</html>