<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Update</title>
</head>
<body>
    <?php
    include'dbconnect.php';
    echo"<br>";

    $sql="update 1stbatch set 
    name='BlackPanther' where id = 4";
    $end= mysqli_query($result, $sql);

    if($end){
        echo"Data has been updated. <br><br><br>Thank You!";
    }
    ?>
</body>
</html>