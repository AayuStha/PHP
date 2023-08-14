<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operator</title>
</head>
<body>
    <h1>About Assignment Operator</h1>
    <?php

$a = 5;
echo "Assignment (=): " . $a . "<br>";

$b = 10;
$b += 3;
echo "Addition Assignment (+=): " . $b . "<br>";

$c = 15;
$c -= 5;
echo "Subtraction Assignment (-=): " . $c . "<br>";

$s = 6;
$s *= 4;
echo "Multiplication Assignment (*=): " . $s . "<br>";

$t = 20;
$t /= 5;
echo "Division Assignment (/=): " . $t . "<br>";

$e = 17;
$e %= 7;
echo "Modulus Assignment (%=): " . $e . "<br>";
?>


</body>

</html>