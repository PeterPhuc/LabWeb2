<base href="http://localhost:<?php echo $_SERVER['SERVER_PORT']; ?>/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai2/">

<?php 
    $conn = new mysqli('localhost', 'root', '', 'shop');
    if ($conn->connect_error) {
        die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
        $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập lab 9 bài 2</title>
    <link rel="stylesheet" href="styles/list.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Site Title</h2>
            <nav>
                <a href="#">Categories</a> |
                <a href="#">Contact us</a> |
                <a href="#">Follow us</a>
            </nav>
            <input type="text" name="search" placeholder="search" />
        </div>
        <div class="content">
            <div class="content__col-1">
                <div class="content__col-1__row-1">
                    <h4>Category</h4>
                    <ul>
                        <li>Item 1...</li>
                        <li>Item 2...</li>
                        <li>Item 3...</li>
                        <li>Item 4...</li>
                        <li>Item 5...</li>
                    </ul>
                </div>
                <div class="content__col-1__row-2">
                    <h4>Top Products</h4>
                    <ul>
                        <li>Item 1...</li>
                        <li>Item 2...</li>
                        <li>Item 3...</li>
                        <li>Item 4...</li>
                        <li>Item 5...</li>
                    </ul>
                </div>
            </div>

            <div class="content__col-2">
                <h2>Top Products</h2>
                <div class="content__col-2__box-items">
                    <!-- <div class="item">
                        <div class="anh">
                            <img src="no-imge.jpg" alt="" srcset="">
                        </div>
                        <p>Price: 10$</p>
                        <button>Buy Now</button>
                    </div>
                    <div class="item">
                        <div class="anh">
                            <img src="no-imge.jpg" alt="" srcset="">
                        </div>
                        <p>Price: 10$</p>
                        <button>Buy Now</button>
                    </div>
                    <div class="item">
                        <div class="anh">
                            <img src="no-imge.jpg" alt="" srcset="">
                        </div>
                        <p>Price: 10$</p>
                        <button>Buy Now</button>
                    </div>
                    <div class="item">
                        <div class="anh">
                            <img src="no-imge.jpg" alt="" srcset="">
                        </div>
                        <p>Price: 10$</p>
                        <button>Buy Now</button>
                    </div>
                    <div class="item">
                        <div class="anh">
                            <img src="no-imge.jpg" alt="" srcset="">
                        </div>
                        <p>Price: 10$</p>
                        <button>Buy Now</button>
                    </div>
                    <div class="item">
                        <div class="anh">
                            <img src="no-imge.jpg" alt="" srcset="">
                        </div>
                        <p>Price: 10$</p>
                        <button>Buy Now</button>
                    </div> -->

                    <?php 
                        if(!$conn->connect_error){
                            $sql = "SELECT id,name,description,price,image FROM products";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    // echo $row["id"]." ".$row["name"]." ".$row["description"]." ".$row["price"]." ".$row["image"]."</br></br>";
                                    echo    "<div class='item'>
                                                <div class='anh'>
                                                    <img src='" . $row["image"] . "' alt='' srcset=''>
                                                </div>
                                                <p>Price: " . $row["price"] . "$</p>
                                                <button>
                                                    <a href='detail.php?id=" . $row["id"] . "'>Show detail</a>
                                                </button>
                                            </div>";
                                }
                            } else {
                                echo "Không có dữ liệu.";
                            }
                        }
                        $conn->close();
                    ?>
                </div>
                <div class="navigation">
                    <span>prev</span>
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>next</span>
                </div>
            </div>

            <div class="content__col-3">
                <div class="content__col-3__box">
                    <span>160 x 600</span>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>Footer Information ...</p>
            <nav>
                <a href="#">Link 1</a> |
                <a href="#" id="no-css" style="text-decoration: none; color: #000;">Link 2</a> |
                <a href="#">Link 3</a>
            </nav>
        </div>
    </div>
</body>
</html>