<?php 
    $conn = new mysqli('localhost', 'root', '', 'shop');
    if ($conn->connect_error) {
        die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
        $conn->close();
    }else{
        $sql = "SELECT id,name,description,price,image FROM products";
        $result = $conn->query($sql);
                            
        if ($result->num_rows > 0) {
            $list_products = array();
            while($row = $result->fetch_assoc()) {
                 array_push($list_products, [$row["id"], $row["name"], $row["description"], $row["price"], $row["image"]]);
            }
            echo json_encode($list_products);
        } else {
            echo "Không có dữ liệu.";
        }
    }
    $conn->close();
?>