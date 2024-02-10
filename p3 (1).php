<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        html {
            background-color: rgb(8, 19, 86);
        }

        .box {
            border: 2px solid rgba(0, 38, 255, 0.3);
            background-color: rgba(255, 255, 255, 0.600);
            width: 50%;
            padding: 10px;
            padding-left: 20px;
            border-radius: 16px;
        }
    </style>
</head>

<body>
    <div class="box">
        <?php
        echo "***Simple Calculator***<br><br>";
        $a = 13;
        $b = 45;

        echo "A is :- $a<br>";
        echo "B is :- $b <br><br>";

        echo "A + B = ", $a + $b, "<br>";
        echo "A - B = ", $a - $b, "<br>";
        echo "A * B = ", $a * $b, "<br>";
        echo "A / B = ", $a / $b, "<br>";
        echo "A * A = ", $a * $a, "<br>";
        echo "B * B = ", $b * $b, "<br>";
        echo "A % B = ", $a % $b, "<br>";
        ?>
    </div>

</body>

</html>
