<?php
    function Calculate($num1, $num2, $operator){
        if($num1 === '' || $num2 === ''){
            echo 'Vui lòng điền đầy đủ thông tin!';
            return;
        }
        switch($operator) {
            case "cong":
                $result = $num1 + $num2;
                break;
            case "tru":
                $result = $num1 - $num2;
                break;
            case "nhan":
                $result = $num1 * $num2;
                break;
            case "chia":
                $result = $num1 / $num2;
                break;
            case "lthua":
                $result = $num1 ** $num2;
                break;
            case "ndao":
                $result = 1 / ($num1 / $num2);
                break;
        }

        echo "kết quả: " . $result;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 5</title>
</head>
<body>
    <form method="get" action="./index.php">
		<label for="num1">Number 1:</label>
		<input type="number" name="num1" ><br>

		<label for="num2">Number 2:</label>
		<input type="number" name="num2" ><br>

		<label for="operator">Operator:</label>
		<select name="operator" id="operator">
			<option value="cong">Cộng</option>
			<option value="tru">Trừ</option>
			<option value="nhan">Nhân</option>
			<option value="chia">Chia</option>
			<option value="lthua">Lũy thừa</option>
			<option value="ndao">Nghịch đảo</option>
		</select><br>

		<button type="submit" >Calc</button>
	</form>
    
    <?php
        if(isset($_GET['num1']) && isset($_GET['num2']) && isset($_GET['operator'])) {
            Calculate($_GET['num1'], $_GET['num2'], $_GET['operator']);
        }
    ?>
</body>
</html>