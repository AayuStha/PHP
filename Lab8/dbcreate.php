<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $result= mysqli_connect("localhost", "root");
    if(!$result){
        echo"Database Connection due to ==>".mysqli_connect_error();
    }
    else{
        echo"Connection Successful";
    }
    echo"<br>";

    $sql= "create database Space";
    $end= mysqli_query($result, $sql);
    if($end){
        echo"Database has been created";
    }
    else{
        die("Db hasnot been created due to -->". mysqli_connect($result));
    }
    ?>
</body>
</html>