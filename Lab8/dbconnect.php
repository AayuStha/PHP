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

    $sql="create table earth (eid int, ename varchar(30),address varchar(30),email varchar(30))";
    $end= mysqli_query($result, $sql);

    if($end){
        echo"Table has been created";
    }
    ?>
</body>
</html>