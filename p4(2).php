<html>

<head>
    <title>GTU Grade Calculator</title>
    <style>
        html {
            background-color: #1AFFD4;
        }

    </style>
</head>

<body>
    <div class="box">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Enter the marks of 4 subjects (out of 100): <br>
            <hr>
            Subject 1: <input type="number" name="sub1" min="0" max="100"><br>
            Subject 2: <input type="number" name="sub2" min="0" max="100"><br>
            Subject 3: <input type="number" name="sub3" min="0" max="100"><br>
            Subject 4: <input type="number" name="sub4" min="0" max="100"><br>
            <hr>
            <input type="submit" value="Calculate Grade">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sub1 = $_POST['sub1'];
            $sub2 = $_POST['sub2'];
            $sub3 = $_POST['sub3'];
            $sub4 = $_POST['sub4'];

            $grade_range = array(
                "AA" => array(85, 100),
                "AB" => array(75, 84),
                "BB" => array(65, 74),
                "BC" => array(55, 64),
                "CC" => array(45, 54),
                "CD" => array(40, 44),
                "DD" => array(35, 39),
                "FF" => array(0, 34)
            );
            function calculate_grade($mark, $grade_range)
            {
                foreach ($grade_range as $grade => $range) {
                    if ($mark >= $range[0] && $mark <= $range[1]) {
                        return $grade;
                    }
                }
            }
            $grades = array();
            $grades[0] = calculate_grade($sub1, $grade_range);
            $grades[1] = calculate_grade($sub2, $grade_range);
            $grades[2] = calculate_grade($sub3, $grade_range);
            $grades[3] = calculate_grade($sub4, $grade_range);
            $result = "PASS";
            if (in_array("FF", $grades)) {
                $result = "FAIL";
            }
            echo "Your result is: " . $result . "<br>";
            echo "<table border='1'>";
            echo "<tr><th>Subject</th><th>Mark</th><th>Grade</th></tr>";
            echo "<tr><td>Subject 1</td><td>$sub1</td><td>$grades[0]</td></tr>";
            echo "<tr><td>Subject 2</td><td>$sub2</td><td>$grades[1]</td></tr>";
            echo "<tr><td>Subject 3</td><td>$sub3</td><td>$grades[2]</td></tr>";
            echo "<tr><td>Subject 4</td><td>$sub4</td><td>$grades[3]</td></tr>";
            echo "</table>";
        }
        ?>
    </div>
</body>

</html>
