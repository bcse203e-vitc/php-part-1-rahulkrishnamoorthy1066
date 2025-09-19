<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>q5</title>
</head>
<body>
    <?php
        $x = array(1, 2, 3, 4, 5);
        echo "Original Array: ";
        var_dump($x);
        echo"</br>";
        unset($x[2]);
        $x = array_values($x);
        echo "Modified Array: ";
        var_dump($x);
    ?>
</body>
</html>