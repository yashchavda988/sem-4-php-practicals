<html>

<head>
    <title>Car Company Finder</title>
    <style>
        .box{
            padding: 10px;
            border: 1px solid white;
            border-radius: 16px;
            align-items: center;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.600);
        }
        html{
            background-color: #1AFFD4;
        }

    </style>
</head>

<body>
    <div class="box">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Enter the name of the car: <input type="text" name="car">
            <input type="submit" value="Find Company">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $car = $_POST['car'];
            $car_company = array(
                "Safari" => "Tata",
                "Nexon" => "Tata",
                "Tigor" => "Tata",
                "Tiago" => "Tata",
                "XUV700" => "Mahindra",
                "XUV300" => "Mahindra",
                "Bolero" => "Mahindra",
                "i20" => "Hyundai",
                "Verna" => "Hyundai",
                "Venue" => "Hyundai",
                "Creta" => "Hyundai",
                "Swift" => "Suzuki",
                "Alto" => "Suzuki",
                "Baleno" => "Suzuki",
                "Brezza" => "Suzuki"
            );
            if ($car != "" && array_key_exists($car, $car_company)) {
                echo "The company name for $car is " . $car_company[$car] . ".";
            } else {
                echo "Invalid or unknown car name. Please try again.";
            }
        }
        ?>
    </div>
</body>

</html>
