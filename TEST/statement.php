<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statement Operator</title>
</head>
<body>
    <h1>About if/else statement</h1>
    <?php
    // If statement
    $n = 40;

    if ($n > 0) {
        echo "Number is positive.<br>";
    }

    $num = -5;

    if ($num > 0) {
        echo "Number is positive.<br>";
    } else {
        echo "Number is negative.<br>";
    }

    $number = 0;

    if ($number > 0) {
        echo "Number is positive.<br>";
    } elseif ($number < 0) {
        echo "Number is negative.<br>";
    } else {
        echo "Number is zero.<br>";
    }
    ?>


</body>

</html>