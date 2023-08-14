<html>
<head>
    <title>Session Start</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['name']='John';
    $_SESSION['age']= 25;
    echo "Session started and variables set";
    ?>

    </body>
</html>