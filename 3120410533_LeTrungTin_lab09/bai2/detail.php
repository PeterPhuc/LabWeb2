<?php 
    $conn = new mysqli('localhost', 'root', '', 'shop');
    if ($conn->connect_error) {
        die("Kết nối đến MySQL thất bại: " . $conn->connect_error);
    }
    else {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM products WHERE id = $id";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $result->data_seek(0);
                $row = $result->fetch_assoc();
            }
        }else{
            echo 'Tham số không tồn tại!';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/detail.css">
    <title>Document</title>
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
                <h2 class="link">Home > Main Category > Sub Category</h2>
                <div class="product-detail">
                    <div class="product-img-title">
                        <div class="img">
                            <img src="<?php echo $row["image"] ?>" alt="">
                        </div>
                        <div class="titles">
                            <h1 class="title">
                                <?php echo $row["name"] ?>
                            </h1>
                            <div class="summary">
                                <h4>Summary</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto eos blanditiis, est distinctio suscipit expedita optio totam doloribus autem ad repellat praesentium ipsum! Nesciunt illo culpa beatae consequatur quis nemo
                                </p>
                            </div>
                            <button>Buy now</button>
                        </div>
                    </div>
                    <div class="product-des">
                        <h4>Description</h4>
                        <p>
                            <?php echo $row["description"] ?>
                        </p>
                    </div>
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