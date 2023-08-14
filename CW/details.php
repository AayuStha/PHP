<html>
    <head>
        <title>Form Details</title>
    </head>
    <body>
        <?php
       include 'dbconnect.php'; 
        echo"<br>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST["id"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $gender = $_POST["gender"];
            $hobbies = $_POST["hobbies"];
            $country = $_POST["country"];
        }
        $sql="insert into class values($id,'$name','$email','$gender','$hobbies','$country')";
        $end=mysqli_query($result,$sql);
        if($end)
        {
            echo"Data inserted successfully";
        }
        ?>
    
    </body>
</html>