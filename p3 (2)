<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Net Salary</title>
    <style>
        .box {
            border: 5px solid red;
            padding: 10px;
            border-radius: 16px;
            background-color: aliceblue;
        }
    </style>
</head>

<body>
    <div class="box">
        <?php

        $basic_salary = 120000;

        echo "Salary :- $basic_salary <br>";

        $da = 0.5 * $basic_salary;
        $hra = 0.1 * $basic_salary;
        $medical = 0.04 * $basic_salary;
        $gross_salary = $basic_salary + $da + $hra + $medical;
        echo "Gross Salary is :- $gross_salary <br>";
        $insurance = 0.07 * $gross_salary;
        $pf = 0.05 * $gross_salary;
        $deduction = $insurance + $pf;
        $net_salary = $gross_salary - $deduction;

        echo "Net Salary: $net_salary";

        ?>
    </div>
</body>

</html>
