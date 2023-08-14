<html>
    <head>
        <title>Table Creation</title>
    </head>
    <body>
        <?php
        include'dbconnect.php';
        echo"<br>";
        $sql="create table class(id int, name varchar(30), email varchar(30), gender varchar(30), hobbies varchar(30), country varchar(30))";
        $end=mysqli_query($result,$sql);
        if($end)
        {
            echo"Table has been created";
        }
        ?>
    </body>
</html>