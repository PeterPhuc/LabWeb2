<?php 
    $conn = new mysqli('localhost', 'root', '', 'shop');
    if ($conn->connect_error) {
        echo "Kết nối sql thất bại";
    }
    else {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "SELECT * FROM products WHERE id = $id";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                $result->data_seek(0);
                $row = $result->fetch_assoc();
                echo '
                <h2 class="link"><a class="homepage" href="index.php">Home</a> > Main Category > Sub Category</h2>
                <div class="product-detail">
                    <div class="product-img-title">
                        <div class="img">
                            <img src="' .$row["image"]. '" alt="">
                        </div>
                        <div class="titles">
                            <h1 class="title">
                                '.$row["name"].'
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
                            '.$row["description"].'
                        </p>
                    </div>
                </div>';
            }else{
                echo "Không có dữ liệu";
            }
        }else{
            echo 'Tham số không tồn tại!';
        }
    }
?>