<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Creation</title>
</head>
<body>
    <?php
        include'mysql.php';

        echo"<br>";
        
        $sql= "create database BCA";
        $end= mysqli_query($result, $sql);
        if($end){
            echo"Database Created Successfully";
            }
        else{
            echo("Database Creation unsuccessfull due to ==>".mysqli_connect_error());
        }
    ?>
</body>
</html>