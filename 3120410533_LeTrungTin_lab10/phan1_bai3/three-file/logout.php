<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        unset($_SESSION['username']);
        unset($_SESSION['password']);

        echo '
            <script>
                alert("Đăng xuất thành công!");
            </script>
        ';
    }else{
        echo '
            <script>
                alert("Bạn chưa đăng nhập!");
            </script>
        ';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>

</body>
</html>