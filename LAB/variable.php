<html>
<head>
    <title>Session Variable Value</title>
</head>
<body>
    <?php
    session_start();
    $name= $_SESSION['name'];
    $age= $_SESSION['age'];
    echo "Name: " .$name ."<br>";  
    echo "Age: " .$age; 
    ?>

    </body>
</html>