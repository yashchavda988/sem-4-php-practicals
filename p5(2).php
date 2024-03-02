<html>

<head>
    <title>Sort Indexed Array</title>
</head>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter the elements of the array separated by commas: <input type="text" name="array">
        <input type="submit" value="Sort Array">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $array = $_POST['array'];
        $array = explode(",", $array);
        sort($array);
        echo "The sorted array is: ";
        foreach ($array as $element) {
            echo $element . " ";
        }
    }
    ?>
</body>

</html>
