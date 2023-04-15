<?php
    function Validate($fname, $lname, $mail, $pass, $d, $m, $y){
        if(strlen($fname) < 2 || strlen($fname) > 30){
            echo 'Tên quá ngắn hoặc quá dài!';
            return;
        }
        if(strlen($lname) < 2 || strlen($lname) > 30){
            echo 'Tên quá ngắn hoặc quá dài!'; 
            return;
        }
        if(strlen($pass) < 2 || strlen($pass) > 30){
            echo 'Mật khẩu quá ngắn hoặc quá dài!'; 
            return;
        }
        if(!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $mail)){
            echo 'Địa chỉ mail không hợp lệ!'; 
            return;
        }

        switch ($m) {
            case 'January':
                $convert_M = 1;
                break;
            case 'February':
                $convert_M = 2;
                break;
            case 'March':
                $convert_M = 3;
                break;
            case 'April':
                $convert_M = 4;
                break;
            case 'May':
                $convert_M = 5;
                break;
            case 'June':
                $convert_M = 6;
                break;
            case 'July':
                $convert_M = 7;
                break;
            case 'August':
                $convert_M = 8;
                break;
            case 'September':
                $convert_M = 9;
                break;
            case 'October':
                $convert_M = 10;
                break;
            case 'November':
                $convert_M = 11;
                break;
            case 'December':
                $convert_M = 12;
                break;
        }

        if(!checkdate($convert_M, $d, $y)){
            echo 'Birthday không hợp lệ'; 
            return;
        }
        echo 'Complete!';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 6</title>
</head>
<body>
    <form method="get" action="./index.php" >
        <label for="">First name: </label>
        <input type="text" name="fname" id=""><br>

        <label for="">Last name: </label>
        <input type="text" name="lname" id=""><br>

        <label for="">Email: </label>
        <input type="text" name="mail" id="" ><br>

        <label for="">Password: </label>
        <input type="password" name="pass" id="" ><br>

        <label for="">Birthday: </label><br>
        <label for="">Day: </label>
        <select name="day" id="day" class="birthday"></select>
        <label for="">Month: </label>
        <select name="month" id="month" class="birthday"></select>
        <label for="">Year: </label>
        <select name="year" id="year" class="birthday"></select><br>

        <label for="">Gender: </label>
        <input type="radio" name="male" id="" value="Nam">
        <label for="">Nam</label>
        <input type="radio" name="male" id="" value="Nữ">
        <label for="">Nữ</label>
        <input type="radio" name="male" id="" value="Không xác định">
        <label for="">Không xác định</label><br>

        <label for="country">Country:</label>
        <select id="country" name="country">
            <option value="Vietnam">Vietnam</option>
            <option value="Australia">Australia</option>
            <option value="United States">United States</option>
            <option value="India">India</option>
            <option value="Other">Other</option>
        </select><br>

        <label for="about">About: </label><br>
        <textarea id="about" name="about" rows="10" cols="50" maxlength="10000"></textarea><br>

        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <?php
        if(isset($_GET['fname']) && isset($_GET['lname']) && isset($_GET['mail']) && isset($_GET['pass']) && isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])) {
            Validate($_GET['fname'], $_GET['lname'], $_GET['mail'], $_GET['pass'], $_GET['day'], $_GET['month'], $_GET['year']);
        }
    ?>

    <script>
        const $$ = document.querySelectorAll.bind(document);
        const d = document.querySelector('#day');
        const m = document.querySelector('#month');
        const y = document.querySelector('#year');

        let str = '';
        for(let i = 1; i <= 31; i++){
            str += `<option value="${i}">${i}</option>`;
        }
        d.innerHTML = str;

        let month_name = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        str = '';
        for(let i = 0; i < 12; i++){
            str += `<option value="${month_name[i]}">${month_name[i]}</option>`;
        }
        m.innerHTML = str;

        str = '';
        for(let i = 1945; i <= 2023; i++){
            str += `<option value="${i}">${i}</option>`;
        }
        y.innerHTML = str;
    </script>
</body>
</html>