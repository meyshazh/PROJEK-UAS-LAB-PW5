<?php

    $server_name="localhost";
    $username="root";
    $password="";
    $db_name="avoskin";
    
    //create connection to db
    $connection= mysqli_connect($server_name, $username, $password, $db_name);
    if (!$connection){
        die ("Connection failed : " . mysqli_connect_error());
    }
?>