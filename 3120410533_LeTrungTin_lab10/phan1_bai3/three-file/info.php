<?php
    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
    }else{
        if(isset($_POST['name']) && isset($_POST['pass'])){
            $_SESSION['username'] = $_POST['name'];
            $_SESSION['password'] = $_POST['pass'];
            $username = $_POST['name'];
            $password = $_POST['pass'];
        }else{
            header('Location: login.php');
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>
<body>
    <span>Username: </span>
    <span>
        <?php
            echo $username;
        ?>
    </span>
</body>
</html>