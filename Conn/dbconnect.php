<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "Universe";

    $att = mysqli_connect($servername, $username, $password, $db);

    if($att){
        echo"Database Connection Successfull";
    }
    
    echo"<br>";

    $sql= "create table department(did int, dname varchar(30), address varchar(30), email varchar(30)";
    $result = mysqli_query($att, $sql);

    if($result){
        echo"Table have been created";
    }
?>