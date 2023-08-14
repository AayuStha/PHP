<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection to MySQL</title>
</head>
<body>
    <?php
        $result=mysqli_connect("localhost","root");
        if(!$result){
                die("Mysql connection unsuccessfull due to ==>").mysqli_connect_error();
            }
        else{
            echo"Mysql connection successfull";
        }    
    ?>
</body>
</html>