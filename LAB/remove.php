<html>
<head>
    <title>Removing Cookie</title>
</head>
<body>
    <?php
    setcookie("username","", time()- 3600);
    echo"Cookie 'username' has been removed.";
    ?>

    </body>
</html>