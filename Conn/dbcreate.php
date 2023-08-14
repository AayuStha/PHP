<?php
    $att = mysqli_connect("localhost", "root", "");

    if(!$att)
        die("databse Connection failed due to ==>" .mysqli_connect_error());
    
    else
        echo"Connection Successfull";

        echo"<br>";
    
        $sql = "create database Universe";
        $result = mysqli_query($att, $sql);
        if($result){
            echo"Database has been created";
        }
        else{
            die("Database has not been created cue to -->" .mysqli_connect($att));
        }
?>