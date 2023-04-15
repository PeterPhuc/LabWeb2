<?php
    function message($n) {
        if($n === ''){
            echo "Vui lòng nhập thông tin";
            return;
        }
        if($n < 0){
            echo "Vui lòng nhập số nguyên dương";
            return;
        }
        $result = $n % 5;
        switch ($result) {
            case 0:
                echo "Hello";
                break;
            case 1:
                echo "How are you?";
                break;
            case 2:
                echo "I'm doing well, thank you";
                break;
            case 3:
                echo "See you later";
                break;
            case 4:
                echo "Good-bye";
                break;
            default:
                echo "Vui lòng nhập đúng định dạng số nguyên. Ví dụ: 1, 2, 3,...";
        }
        echo "<br>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
    <form action="./index.php" method="get">
        <label for="">Nhập số dương: </label><br>
        <input type="number" name="so" id="">
        <button type="submit">Enter</button>
    </form>
    <?php
        if(isset($_GET['so'])){
            message($_GET['so']);
        }
    ?>
</body>
</html>