<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
</head>
<body>
    <?php
    $server="localhost";
    $username="root";
    $password="";
    $db="BCA";

    $result= mysqli_connect($server, $username, $password, $db);
    if($result){
        echo("Database Connection Successfully");
        }
    else{
        echo("Database Connection unsuccessfull due to ==>").mysqli_connect_error() ;
    }
    ?>
</body>
</html>