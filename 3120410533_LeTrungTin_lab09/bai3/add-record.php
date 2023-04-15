<?php 
    $conn = new mysqli('localhost', 'root', '', 'shop');
    if ($conn->connect_error) {
        echo "
            <script>
                alert('Kết nối đến db thất bại');
                window.location.href = 'http://localhost/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/b.php';
            </script>
        ";
    }else{
        if (isset($_POST['name']) && isset($_POST['des']) && isset($_POST['pri']) && isset($_POST['img'])) {
            $name = $_POST['name'];
            $des = $_POST['des'];
            $pri = $_POST['pri'];
            $img = $_POST['img'];

            $sql = "
                INSERT INTO products (name,description,price,image)
                VALUES ('$name', '$des', '$pri', '$img')
            ";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "
                    <script>
                        alert('Thêm dữ liệu thành công!');
                        window.location.href = 'http://localhost/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/b.php';
                    </script>
                ";
               
            } else {
                echo "
                    <script>
                        alert('Lỗi khi thêm bản ghi!');
                        window.location.href = 'http://localhost/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/b.php';
                    </script>
                ";
            }
        }
    }
    $conn->close();
?>