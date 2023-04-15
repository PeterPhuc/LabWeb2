<?php 
    $conn = new mysqli('localhost', 'root', '', 'shop');
    if ($conn->connect_error) {
        echo "
            <script>
                alert('Kết nối đến db thất bại');
                window.location.href = 'http://localhost/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/c.php?id=" . $id . "';
            </script>
        ";
    }else{
        if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['des']) && isset($_POST['pri']) && isset($_POST['img'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $des = $_POST['des'];
            $pri = $_POST['pri'];
            $img = $_POST['img'];

            $sql = "
                UPDATE products SET
                name = '$name',
                description = '$des',
                price = '$pri',
                image = '$img'
                WHERE id = $id
            ";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "
                    <script>
                        alert('Sửa dữ liệu thành công!');
                        window.location.href = 'http://localhost/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/c.php?id=" . $id . "';
                    </script>
                ";
               
            } else {
                echo "
                    <script>
                        alert('Lỗi khi cập nhật bản ghi!');
                        window.location.href = 'http://localhost/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/c.php?id=" . $id . "';
                    </script>
                ";
            }
        }
    }
    $conn->close();
?>