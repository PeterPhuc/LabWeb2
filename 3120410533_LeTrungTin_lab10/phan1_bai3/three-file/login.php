<?php 
    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        header('Location: info.php');
        exit;
    } else {
        echo 'Bạn chưa đăng nhập. Hãy đăng nhập!!';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="info.php" method="post">
        <br>
        <label for="">Username: </label>
        <input type="text" name="name" id="">
        <br><br>
        <label for="">Password: </label>
        <input type="password" name="pass" id="">
        <br>
        <button type="submit">Login</button>
    </form>

    <script>
        const username = localStorage.getItem('username');
        const password = localStorage.getItem('password');
        const $ = document.querySelector.bind(document);
        $('button[type="submit"]').addEventListener('click', function(e){
            e.preventDefault();
            const name = $('input[type="text"]').value;
            const pass = $('input[type="password"]').value;

            if(name === username && pass === password)
                this.parentElement.submit();
            else
                alert('Nhập sai username hoặc password!!!');
        })
    </script>
</body>
</html>