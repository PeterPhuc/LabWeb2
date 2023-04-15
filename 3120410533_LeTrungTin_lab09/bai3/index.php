<base href="http://localhost:<?php echo $_SERVER['SERVER_PORT']; ?>/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3 lab 9</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Read Product</h1>
    <button type="button" class="btn btn-primary">
        <a href="b.php">Thêm mới sản phẩm</a>
    </button>
    <button type="button" class="btn btn-primary">
        <a class="show-products" href="">Liệt kê sản phẩm</a>
    </button>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
        </tbody>
    </table>

    <script>
        const showProduct = document.querySelector('.show-products');
        //Hành động liệt kê sản phẩm
        showProduct.onclick = function(e){
            e.preventDefault();
            fetch('a.php')
            .then(res => res.text())
            .then(data => {
                render(JSON.parse(data));
            });
        }
        function myFn(a) {
            const id = a.getAttribute('data-id');
            let choose = window.confirm("Bạn có chắc muốn xóa bản ghi này?");
            if(choose){
                window.location.href = `http://localhost/BaiTapLabWeb2-PHP/3120410533_LeTrungTin_lab09/bai3/d.php?id=${id}`;
            }
        }
        function render(result){
            const map_product = result.map(function(item, index){
                return ` 
                <tr>
                    <td>${item[0]}</td>
                    <td>${item[1]}</td>
                    <td>${item[2]}</td>
                    <td>$${item[3]}</td>
                    <td class="img">
                        <div class="wrapper">
                            <img src="${item[4]}" alt="">
                        </div>
                    </td>
                    <td class="ctrl">
                        <div class="btn">
                            <button type="button" class="btn btn-primary">
                                <a href="c.php?id=${item[0]}">Sửa</a>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <a href="javascript:void(0);" data-id=${item[0]} onclick=myFn(this)>Xóa</a>
                            </button>
                        </div>
                    </td>
                </tr>
                `;
            });
            document.querySelector('tbody').innerHTML = map_product.join('');
        }
    </script>
</body>
</html>
