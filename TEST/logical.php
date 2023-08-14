<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operator</title>
</head>
<body>
    <h1>About Logical Operator</h1>
    <?php
    $a = true;
    $b = false;
    

    $result = $a && $b;
    echo "Logical AND: " . ($result ? 'true' : 'false') . "<br>";
    
    $result = $a || $b;
    echo "Logical OR: " . ($result ? 'true' : 'false') . "<br>";
    
    $result = !$a;
    echo "Logical NOT: " . ($result ? 'true' : 'false') . "<br>";

    $result = $a and $b;
    echo "Logical AND (and): " . ($result ? 'true' : 'false') . "<br>";

    $result = $a or $b;
    echo "Logical OR (or): " . ($result ? 'true' : 'false') . "<br>";
    ?>
</body>

</html>