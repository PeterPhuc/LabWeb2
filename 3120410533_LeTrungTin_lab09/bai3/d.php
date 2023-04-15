<?php 
    $conn = new mysqli('localhost', 'root', '', 'shop');
    if ($conn->connect_error) {
        echo "
            <script>
                alert('Kết nối đến db thất bại');
                window.location.href = 'http://localhost/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/index.php';
            </script>
        ";
    }else{
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            
            $sql = "
                DELETE FROM products 
                WHERE id = $id
            ";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "
                    <script>
                        alert('Xóa dữ liệu thành công!');
                        window.location.href = 'http://localhost/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/index.php';
                    </script>
                ";
               
            } else {
                echo "
                    <script>
                        alert('Lỗi khi xóa bản ghi!');
                        window.location.href = 'http://localhost/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/index.php';
                    </script>
                ";
            }
        }
    }
    $conn->close();
?>