<html>
<head>
    <title>Session Modify</title>
</head>
<body>
    <?php
    session_start();
    $_SESSION['age']=26; 
    echo "Session variable modified"; 
    ?>

    </body>
</html>