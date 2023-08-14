<html>
<head>
    <title>Accessing Cookie Value</title>
</head>
<body>
    <?php
    if (isset($_COOKIE['username'])) {
        echo "Hi ".$_COOKIE['username'];
    } 
    else {
        echo "Welcome Guest!";
    }
    ?>

    </body>
</html>