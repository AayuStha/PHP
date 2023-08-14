<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $server="localhost";
    $username="root";
    $password="";
    $db="Space";

    $result= mysqli_connect($server, $username, $password, $db);
    if($result){
        echo"Database Connection Successful";
    }
    echo"<br>";

    $sql="delete from earth where id=4";
    $end= mysqli_query($result, $sql);

    if($end){
        echo"Data has been inserted. <br><br><br>Thank You!";
    }
    ?>
</body>
</html>