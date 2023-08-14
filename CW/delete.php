<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Deletion</title>
</head>
<body>
    <?php
    include'dbconnect.php';
    echo"<br>";

    $sql="delete from 1stbatch where id=2";
    $end= mysqli_query($result, $sql);

    if($end){
        echo"Data has been deleted. <br><br><br>Thank You!";
    }
    ?>
</body>
</html>