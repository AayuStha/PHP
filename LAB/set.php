<html>
<head>
    <title>Setting Cookie</title>
</head>
<body>
    <?php
    setcookie("username","Sheldon Cooper", time()+ 86400*30);
    echo"Cookie has been set";
    ?>

    </body>
</html>