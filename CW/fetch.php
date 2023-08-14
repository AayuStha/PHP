<html>
    <head>
        <title>fetch</title>
        <!-- <style>
        *{
                text-align: center;
                margin-left: auto;
                margin-right: auto;
                font-family: VERDANA;
        }
        table{
            width:90%;
        }
        </style> -->
    </head>
    <body>
        <?php
        include'dbconnect.php';
        $sql="SELECT * FROM class";
        $end=mysqli_query($result,$sql);
        echo"<br>";
        $num = mysqli_num_rows($end);
        echo"<br>";
        echo"Number of rows in the table= " .$num;
        echo"<br>";
        echo"<br>";
        echo"<br>";
        if($num>0){
            echo"<table border = 5>";
            echo"<tr>";
            echo"<th> Id</th>";
            echo"<th> Name</th>";
            echo"<th> Email</th>";
            echo"<th> Gender</th>";
            echo"<th> Hobbies</th>";
            echo"<th> Country</th>";
            echo"</tr>";
            while($row=mysqli_fetch_assoc($end)){
            echo"<tr>";
                echo"<td>" .$row['id']. "</td>";
                echo"<td>" .$row['name']. "</td>";
                echo"<td>" .$row['email']. "</td>";
                echo"<td>" .$row['gender']. "</td>";
                echo"<td>" .$row['hobbies']. "</td>";
                echo"<td>" .$row['country']. "</td>";
                echo"</tr>";
            }
        }
        ?>
    </body>
</html>
<!-- php program to retrieve data from database -->