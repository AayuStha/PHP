<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Insertion</title>
</head>
<body>
    <?php
    include'dbconnect.php';
    echo"<br>";

    $sql="insert into 1stbatch values(1, 'Natasha','Los Angeles','natasha@shield.com',40), (2, 'Tony','Malibu','ironman@avengers.com',32),(3, 'Dr. Strange','KamarTaj','strange@kamartaj.com',42),(4, 'Tchala','Wakanda','panther@wakanda.com',28),(5, 'Peter','NewYork','peter@spider.com', 21)";
    $end= mysqli_query($result, $sql);

    if($end){
        echo"Data has been inserted. <br><br><br>Thank You!";
    }
    ?>
</body>
</html>