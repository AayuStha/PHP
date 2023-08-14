<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparision Operator</title>
</head>
<body>
    <h1>About Comparision Operator</h1>
    <?php
    $a = 10;
    $b = 20;

    // Equal to
    if ($a == $b) {
        echo "Equal to operator: True<br>";
    } else {
        echo "Equal to operator: False<br>";
    }

    // Not equal to
    if ($a != $b) {
        echo "Not equal to operator: True<br>";
    } else {
        echo "Not equal to operator: False<br>";
    }

    // Greater than
    if ($a > $b) {
        echo "Greater than operator: True<br>";
    } else {
        echo "Greater than operator: False<br>";
    }

    // Less than
    if ($a < $b) {
        echo "Less than operator: True<br>";
    } else {
        echo "Less than operator: False<br>";
    }

    // Greater than or equal to
    if ($a >= $b) {
        echo "Greater than or equal to operator: True<br>";
    } else {
        echo "Greater than or equal to operator: False<br>";
    }

    // Less than or equal to
    if ($a <= $b) {
        echo "Less than or equal to operator: True<br>";
    } else {
        echo "Less than or equal to operator: False<br>";
    }
    ?>
</body>

</html>