<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
    <style>
        table, td {
            border: 1px solid black;
        }
        table {
            border-collapse: collapse;
            background-color: yellow;
        }
        td {
            width: 50px;
            height: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <?php
            for ($i = 1; $i <= 7; $i++) {
                echo "<tr>";
                    for($j = 1; $j <= 7; $j++) {
                        $tich = $i * $j;
                        echo "<td>$tich</td>";
                    }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>