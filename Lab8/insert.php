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

    $sql="delete from earth values(4, 'Aayush','Imadol','contact@aayushrestha.com'), (2, 'Sakshi','Ranibu','contact@sakshimaharjan.com.np'),(3, 'Dr. Strange','KamarTaj','mail@aayushrestha.com'),(4, 'Black Panther','Wankanda','blackpanther@wakanda.com'),(3, 'Spiderman','NewYork','spider@newyork.com')";
    $end= mysqli_query($result, $sql);

    if($end){
        echo"Data has been inserted. <br><br><br>Thank You!";
    }
    ?>
</body>
</html>